@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="nrnid/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($nrns as $nrn)  
     <tr>
<td><a href="{{action('NRNIDController@show',[$nrn->id])}}"><h4>{{$nrn->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('NRNIDController@edit',[$nrn->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('NRNIDController@destroy',[$nrn->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection