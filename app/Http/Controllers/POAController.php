<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PowerofAttorney;
use Request;

class POAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $poas=PowerofAttorney::latest()->get();
                return view('admin.powerofattorney.index')->with('poas',$poas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.powerofattorney.create');
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

      PowerofAttorney::create($input);

      return redirect('admin/powerofattorney');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $poas=PowerofAttorney::findorFail($id);
        return view('admin.powerofattorney.show')->with('poas',$poas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $poas=PowerofAttorney::findorFail($id);
        return view('admin.PowerofAttorney.edit')->with('poas',$poas);
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
         $poaupdate=Request::all();
        $poas=PowerofAttorney::findorFail($id);
        $poas->update($poaupdate);
        return redirect('admin/powerofattorney');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $poas=PowerofAttorney::findorFail($id);
        $poas->delete();
        return redirect('admin/powerofattorney');
    }
}
