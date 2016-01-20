@extends('admin.adminmaster')

@section('content')

<h2>list </h2>
<a class="btn btn-primary" href="orgstruc/create" role="button">+ Add New </a>
<hr>

<table style="width:100%">

@foreach($orgs as $org)  
     <tr>
<td><a href="{{action('OrgStrucController@show',[$org->id])}}"><h4>{{$org->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('OrgStrucController@edit',[$org->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('AttestationController@destroy',[$org->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection