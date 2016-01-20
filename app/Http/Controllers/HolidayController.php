<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PublicHoliday;
use Request;
class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hols=PublicHoliday::latest()->get();
                return view('admin.holiday.index')->with('hols',$hols);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.holiday.create');
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

      PublicHoliday::create($input);

      return redirect('admin/holiday');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $hols=PublicHoliday::findorFail($id);
        return view('admin.holiday.show')->with('hols',$hols);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $hols=PublicHoliday::findorFail($id);
        return view('admin.holiday.edit')->with('hols',$hols);
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
        $holupdate=Request::all();
        $hols=PublicHoliday::findorFail($id);
        $hols->update($holupdate);
        return redirect('admin/holiday');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hols=PublicHoliday::findorFail($id);
        $hols->delete();
        return redirect('admin/holiday');
    }
}
