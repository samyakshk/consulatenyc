@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="travel/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($trds as $trd)  
     <tr>
<td><a href="{{action('TraveldocumentController@show',[$trd->id])}}"><h4>{{$trd->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('TraveldocumentController@edit',[$trd->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('TraveldocumentController@destroy',[$trd->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection