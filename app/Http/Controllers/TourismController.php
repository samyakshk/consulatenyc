<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tourism;
use Request;

class TourismController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $tours=Tourism::latest()->get();
                return view('admin.tourism.index')->with('tours',$tours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.tourism.create');
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

      Tourism::create($input);

      return redirect('admin/tourism');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tours=Tourism::findorFail($id);
        return view('admin.tourism.show')->with('tours',$tours);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tours=Tourism::findorFail($id);
        return view('admin.tourism.edit')->with('tours',$tours);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $tourupdate=Request::all();
        $tours=Tourism::findorFail($id);
        $tours->update($tourupdate);
        return redirect('admin/tourism');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $tours=Tourism::findorFail($id);
        $tours->delete();
        return redirect('admin/tourism');
    }
}
