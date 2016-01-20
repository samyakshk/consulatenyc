<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\DipVisa;
use Request;
class DipVisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $dips=DipVisa::latest()->get();
                return view('admin.diplomacyvisa.index')->with('dips',$dips);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.diplomacyvisa.create');
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

      DipVisa::create($input);

      return redirect('admin/diplomacyvisa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $dips=DipVisa::findorFail($id);
        return view('admin.diplomacyvisa.show')->with('dips',$dips);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $dips=DipVisa::findorFail($id);
        return view('admin.diplomacyvisa.edit')->with('dips',$dips);
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
       $dipupdate=Request::all();
        $dips=DipVisa::findorFail($id);
        $dips->update($dipupdate);
        return redirect('admin/diplomacyvisa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dips=DipVisa::findorFail($id);
        $dips->delete();
        return redirect('admin/diplomacyvisa');
    }
}
