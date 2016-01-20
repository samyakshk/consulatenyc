@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="trade/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($trades as $trade)  
     <tr>
<td><a href="{{action('TradeController@show',[$trade->id])}}"><h4>{{$trade->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('TradeController@edit',[$trade->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('TradeController@destroy',[$trade->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection