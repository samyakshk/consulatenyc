<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NRNID;
use Request;
class NRNIDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nrns=NRNID::latest()->get();
                return view('admin.nrnid.index')->with('nrns',$nrns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.nrnid.create');
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

      NRNID::create($input);

      return redirect('admin/nrnid');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $nrns=NRNID::findorFail($id);
        return view('admin.nrnid.show')->with('nrns',$nrns);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $nrns=NRNID::findorFail($id);
        return view('admin.nrnid.edit')->with('nrns',$nrns);
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
         $nrnupdate=Request::all();
        $nrns=NRNID::findorFail($id);
        $nrns->update($nrnupdate);
        return redirect('admin/nrnid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $nrns=NRNID::findorFail($id);
        $nrns->delete();
        return redirect('admin/nrnid');
    }
}
