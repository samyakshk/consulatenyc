@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="officialvisa/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($offs as $off)  
     <tr>
<td><a href="{{action('OffVisaController@show',[$off->id])}}"><h4>{{$off->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('OffVisaController@edit',[$off->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('OffVisaController@destroy',[$off->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection