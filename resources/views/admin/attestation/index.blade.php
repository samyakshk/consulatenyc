@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="attestation/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($attestations as $attestation)  
     <tr>
<td><a href="{{action('AttestationController@show',[$attestation->id])}}"><h4>{{$attestation->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('AttestationController@edit',[$attestation->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('AttestationController@destroy',[$attestation->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection