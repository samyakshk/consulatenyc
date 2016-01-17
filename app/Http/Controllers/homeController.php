<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Home;
class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $homes=Home::latest()->get();
       // $search=Request::get('search');
       //$passportsearches=Passport::where('Full_Name','like','%'.$search.'%');
         //   return view('public')->with('passports');

         return view('admin.Homepage.index')->with('homes',$homes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Homepage.create');
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

      Home::create($input);

      return redirect('admin/Homepage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homes=Home::findorFail($id);
        return view('admin.Homepage.show')->with('homes',$homes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $homes=Home::findorFail($id);
          return view('admin.Homepage.edit')->with('homes',$homes);
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
        $homeupdate=Request::all();
        $homes=Home::findorFail($id);
        $homes->update($homeupdate);
        return redirect('admin/Homepage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $homes=Home::findorFail($id);
        $homes->delete();
        return redirect('admin/Homepage');
    }
}
