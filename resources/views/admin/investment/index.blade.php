@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="investment/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($invests as $invest)  
     <tr>
<td><a href="{{action('InvestController@show',[$invest->id])}}"><h4>{{$invest->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('InvestController@edit',[$invest->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('InvestController@destroy',[$invest->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection