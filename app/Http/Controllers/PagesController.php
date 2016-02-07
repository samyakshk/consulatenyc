<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pages;
use Request;

use Input;
class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');


    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages=Pages::latest()->get();
        return view('admin.pages.index')->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories=Categories::lists('title','id');
    return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input=Request::all();
         if (Input::hasFile('image'))
         {
            $file=Input::file('image');
            $file->move('images',$file->getClientOriginalName());
          //  $file->save();
           

         }
      //  $file==$request->file('userfile');

       // $destination_path = 'public/images';
       // $filename = str_random(6).'_'.$file->getClientOriginalName();
     //   $file->move($destination_path, $filename);
        
     //   $image->file = $destination_path . $filename;
      
      //$image->save();

        
            Pages::create($input);

      return redirect('admin/pages');

           




      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pages=Pages::findorFail($id);
        
        return view('admin.pages.show')->with('pages',$pages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
               
        $pages=Pages::findorFail($id);
        
         return view('admin.pages.edit')->with('pages',$pages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {   
        $pagesUpdate=Request::all();
        $pages=Pages::findorFail($id);
        $pages->update($pagesUpdate);
        return redirect('admin/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $pages=Pages::findorFail($id);
       $pages->delete();
       return redirect('admin/pages');
    }
    
}
