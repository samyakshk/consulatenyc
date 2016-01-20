@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="press/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($presses as $press)  
     <tr>
<td><a href="{{action('PressController@show',[$press->id])}}"><h4>{{$press->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('PressController@edit',[$press->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('PressController@destroy',[$press->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection