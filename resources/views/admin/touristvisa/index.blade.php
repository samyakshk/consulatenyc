@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="touristvisa/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($tvisas as $tvisa)  
     <tr>
<td><a href="{{action('TouristVisaController@show',[$tvisa->id])}}"><h4>{{$tvisa->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('TouristVisaController@edit',[$tvisa->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('TouristVisaController@destroy',[$tvisa->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection