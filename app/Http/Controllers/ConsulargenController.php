<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ConsularGen;
use Request;
class ConsulargenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cons=ConsularGen::latest()->get();
                return view('admin.consulargeneral.index')->with('cons',$cons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.consulargeneral.create');
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

      ConsularGen::create($input);

      return redirect('admin/consular');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $cons=ConsularGen::findorFail($id);
        return view('admin.consulargeneral.show')->with('cons',$cons);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $cons=ConsularGen::findorFail($id);
        return view('admin.consulargeneral.edit')->with('cons',$cons);
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
        $consupdate=Request::all();
        $cons=ConsularGen::findorFail($id);
        $cons->update($consupdate);
        return redirect('admin/consular');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cons=ConsularGen::findorFail($id);
        $cons->delete();
        return redirect('admin/consular');
    }
}
