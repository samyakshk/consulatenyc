@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="holiday/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($hols as $hol)  
     <tr>
<td><a href="{{action('HolidayController@show',[$hol->id])}}"><h4>{{$hol->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('HolidayController@edit',[$hol->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('HolidayController@destroy',[$hol->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection