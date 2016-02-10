@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="consular/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($cons as $con)  
     <tr>
<td><a href="{{action('ConsulargenController@show',[$con->id])}}"><h4>{{$con->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('ConsulargenController@edit',[$con->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('ConsulargenController@destroy',[$con->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection