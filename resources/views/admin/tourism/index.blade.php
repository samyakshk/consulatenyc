@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="tourism/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($tours as $tour)  
     <tr>
<td><a href="{{action('TourismController@show',[$tour->id])}}"><h4>{{$tour->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('TourismController@edit',[$tour->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('TourismController@destroy',[$tour->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection