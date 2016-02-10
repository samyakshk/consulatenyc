<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use  App\Passport;
use App\Statuses;
use App\PassportStatus;
class PassportStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passports=Passport::latest()->get();
        return view('admin.Passport_Status.index')->with('passports',$passports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $passports=Passport::lists('Passport_Number','id');
         $statuses=Statuses::lists('Status_Name','id');
    return view('admin.Passport_Status.create')->with('passports',$passports)->with('statuses',$statuses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
$passport=Passport::create($request->all());
     
    $passport->status()->attach($request->input('Status_Name'));
      return redirect('admin/passportstatus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //  $passports=Passport::findorFail($id);
     //    $status=Status::findorFail($id);
      //  return view('admin.passport.show')->with('passports',$passports)->with('status',$status);
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
         $statuses=Statuses::lists('Status_Name','id');       
        return view('admin.Passport_Status.edit')->with('passports',$passports)->with('statuses',$statuses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
     // dd($request->input('Status_id'));
       //$passUpdate=PassportStatus::create($request->all());

      //  $passUpdate=Passport::create($request->all());
        
       $passports=Passport::findorFail($id);
        $passports->status()->attach($request->input('Status_id'));


      // $passports->update($passUpdate);
        return redirect('admin/passportstatus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //check the status of the passport entered and give the value
    public function statusCheck(Request $request)
    {
        $name=$request->input('fullname');
        $dob=$request->input('dob');
        $passportNum=$request->input('passportNum');
       
       $passports = Passport::where('Full_Name','=',$name)->orWhere('Date_Of_Birth','=',$dob)->orWhere('Passport_Number','=',$passportNum)->latest()->get();
          //dd($passports);
       if($passports->count() > 0){
            foreach($passports as $passport){
                $status=$passport->latestStatus()->Status_Name;
            }
            return Redirect::back()->withErrors(['<div class="alert alert-info alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Your Status is <strong>'.$status.'</strong> </div>']);
        }

        return Redirect::back()->withErrors(['<div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Please enter valid information </div>']);
       
        // Session::flash('message', $status);
        // return Redirect::back();
        // return view('front.passportstatusview')->with('passports',$passports);
        
    }



    
}
