@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="diplomacyvisa/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($dips as $dip)  
     <tr>
<td><a href="{{action('DipVisaController@show',[$dip->id])}}"><h4>{{$dip->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('DipVisaController@edit',[$dip->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('DipVisaController@destroy',[$dip->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection