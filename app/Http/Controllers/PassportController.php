<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use  App\Passport;
class PassportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');


    } /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $passports=Passport::latest()->get();
        return view('admin.passport.index')->with('passports',$passports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.passport.create');
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

      Passport::create($input);

      return redirect('admin/passport');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $passports=Passport::findorFail($id);
        
        return view('admin.passport.show')->with('passports',$passports);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $passports=Passport::findorFail($id);
         
         return view('admin.passport.edit')->with('passports',$passports);
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
       $passUpdate=Request::all();
        $passports=Passport::findorFail($id);
        $passports->update($passUpdate);
        return redirect('admin/passport');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passports=Passport::findorFail($id);
       $passports->delete();
       return redirect('admin/passport');
    }
}
