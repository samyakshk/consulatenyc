<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OrgStruc;
use Request;

class OrgStrucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $orgs=OrgStruc::latest()->get();
                return view('admin.orgstruc.index')->with('orgs',$orgs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('admin.orgstruc.create');
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

      OrgStruc::create($input);

      return redirect('admin/orgstruc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orgs=OrgStruc::findorFail($id);
        return view('admin.orgstruc.show')->with('orgs',$orgs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $orgs=OrgStruc::findorFail($id);
        return view('admin.orgstruc.edit')->with('orgs',$orgs);
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
          $orgupdate=Request::all();
        $orgs=OrgStruc::findorFail($id);
        $orgs->update($orgupdate);
        return redirect('admin/orgstruc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $orgs=OrgStruc::findorFail($id);
        $orgs->delete();
        return redirect('admin/orgstruc');
    }
}
