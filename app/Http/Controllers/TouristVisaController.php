<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TouristVisa;
use Request;

class TouristVisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $tvisas=TouristVisa::latest()->get();
                return view('admin.touristvisa.index')->with('tvisas',$tvisas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.touristvisa.create');
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

      TouristVisa::create($input);

      return redirect('admin/touristvisa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tvisas=TouristVisa::findorFail($id);
        return view('admin.touristvisa.show')->with('tvisas',$tvisas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tvisas=TouristVisa::findorFail($id);
        return view('admin.touristvisa.edit')->with('tvisas',$tvisas);
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
       $tvupdate=Request::all();
        $tvisas=TouristVisa::findorFail($id);
        $tvisas->update($attupdate);
        return redirect('admin/touristvisa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tvisas=TouristVisa::findorFail($id);
        $tvisas->delete();
        return redirect('admin/touristvisa');
    }
}
