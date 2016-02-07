<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Images;
use App\Album;
use Validator;
use Input;
use Redirect;
class ImageController extends Controller
{
    public function getForm($id)
  {
    $album = Album::find($id);
   


     return view('admin.imagegallery.addimage')->with('album',$album);
  }

  public function postAdd()
  {
    $rules = array(

      'album_id' => 'required|numeric|exists:albums,id',
      'image' =>'required|mimes:jpeg,bmp,png'

    );
    
    $validator = Validator::make(Input::all(), $rules);
    if($validator->fails()){

      return Redirect::route('add_image',array('id' =>Input::get('album_id')))
      ->withErrors($validator)
      ->withInput();
    }



    $file = Input::file('image');
    $random_name = str_random(8);
    $destinationPath = 'albums/';
    $extension = $file->getClientOriginalExtension();
    $filename=$random_name.'_album_image.'.$extension;
    $uploadSuccess = Input::file('image')->move($destinationPath, $filename);
    Images::create(array(
      'description' => Input::get('description'),
      'image' => $filename,
      'album_id'=> Input::get('album_id')
    ));

    return Redirect::route('show_album',array('id'=>Input::get('album_id')));
  }
  public function getDelete($id)
  {
    $image = Images::find($id);
    $image->delete();
    return Redirect::route('show_album',array('id'=>$image->album_id));
  }

  public function postMove()
{
  $rules = array(

    'new_album' => 'required|numeric|exists:albums,id',
    'photo'=>'required|numeric|exists:images,id'

  );

  $validator = Validator::make(Input::all(), $rules);
  if($validator->fails()){

    return Redirect::route('index');
  }
  $image = Images::find(Input::get('photo'));
  $image->album_id = Input::get('new_album');
  $image->save();
  return Redirect::route('show_album',array('id'=>Input::get('new_album')));
}
}
