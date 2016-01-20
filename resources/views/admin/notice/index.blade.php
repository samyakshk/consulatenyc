@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="notice/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($notices as $notice)  
     <tr>
<td><a href="{{action('NoticeController@show',[$notice->id])}}"><h4>{{$notice->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('NoticeController@edit',[$notice->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('NoticeController@destroy',[$notice->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection