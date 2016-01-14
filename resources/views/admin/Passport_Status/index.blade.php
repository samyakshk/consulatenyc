@extends('admin.adminmaster')
 @section('content')

 <h2>Passport list </h2>
 

 <hr>
  <table style="width:100%">
    <tr >
		  <th>Name</th>
		  <th>Passport Number</th>
		  <th>Status</th>
		  <th>Action</th>

	  </tr>

   @foreach($passports as $passport)
         <tr >
  	           <td>{{$passport->Full_Name}}</td>
               <td>{{$passport->Passport_Number}}</a></td>
                <td>{{$passport->latestStatus()->Status_Name}}</td>
               <td><a class="btn btn-warning" href="{{action('PassportStatusController@edit',[$passport->id])}}" role="button">Edit Status</a></td>


           </tr>

     @endforeach

  </table>

@endsection
