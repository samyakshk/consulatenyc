@extends('admin.adminmaster')
@section('content')
 
<h2>Passport list </h2>
<a class="btn btn-primary" href="passport/create" role="button">+ Add New Passport</a>
<a class="btn btn-primary" href="{{url('/admin/passportstatus',null)}}" role="button">change Passportstatus</a>
<hr>


<hr>
<table style="width:100%">
	<tr>
		<th>Name</th>
		<th>Passport Number</th>
		<th>Status</th>
	</tr>
 @foreach($passports as $passport)
  <tr>
    <td><a href="{{action('PassportController@show',[$passport->id])}}"><h4>{{$passport->Full_Name}}</h4></a></td>
   
	<td>{{$passport->Passport_Number}}</td>
 	 <td>{{$passport->latestStatus()->Status_Name}}</td>
   <td><a class="btn btn-warning" href="{{action('PassportController@edit',[$passport->id])}}" role="button">Edit</a>

 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span>Delete</button>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this?</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" href="{{action('PassportController@destroy',[$passport->id])}}" role="button"> Yes</a>
       	<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        </div>
      </div>

</td>
 
  </tr>
 
 @endforeach
</table>

@endsection

