<?php
namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OffVisa;
use Request;

class OffVisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $offs=OffVisa::latest()->get();
                return view('admin.officialvisa.index')->with('offs',$offs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.officialvisa.create');
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

      OffVisa::create($input);

      return redirect('admin/officialvisa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $offs=OffVisa::findorFail($id);
        return view('admin.officialvisa.show')->with('offs',$offs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $offs=OffVisa::findorFail($id);
        return view('admin.officialvisa.edit')->with('offs',$offs);
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
        $offupdate=Request::all();
        $offs=OffVisa::findorFail($id);
        $offs->update($offupdate);
        return redirect('admin/officialvisa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $offs=Attestation::findorFail($id);
        $offs->delete();
        return redirect('admin/officialvisa');
    }
}
