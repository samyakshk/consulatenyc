<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categories;
use Request;
class Categoriescontroller extends Controller
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
         $categories=Categories::latest()->get();
                return view('admin.categories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $input=Request::all();

      Categories::create($input);

      return redirect('admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=Categories::findorFail($id);
        return view('admin.categories.show')->with('categories',$categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Categories::findorFail($id);
        return view('admin.categories.edit')->with('categories',$categories);
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
        $categoriesupdate=Request::all();
        $categories=Categories::findorFail($id);
        $categories->update($categoriesupdate);
        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories=Categories::findorFail($id);
        $categories->delete();
        return redirect('admin/categories');
    }
}
