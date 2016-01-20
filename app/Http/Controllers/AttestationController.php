<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attestation;
use Request;
class AttestationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $attestations=Attestation::latest()->get();
                return view('admin.attestation.index')->with('attestations',$attestations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attestation.create');
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

      Attestation::create($input);

      return redirect('admin/attestation');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $attestations=Attestation::findorFail($id);
        return view('admin.attestation.show')->with('attestations',$attestations);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $attestations=Attestations::findorFail($id);
        return view('admin.attestation.edit')->with('attestations',$attestations);
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
         $attupdate=Request::all();
        $attestations=Attestations::findorFail($id);
        $attestations->update($attupdate);
        return redirect('admin/attestation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $attestations=Attestation::findorFail($id);
        $attestations->delete();
        return redirect('admin/attestation');
    }
}
