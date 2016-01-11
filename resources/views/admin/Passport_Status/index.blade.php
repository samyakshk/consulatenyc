@extends('admin.adminmaster')
@section('content')

<h2>Passport list </h2>
<a class="btn btn-primary" href="passport/create" role="button">+ Add New Passport Status</a>

<hr>
<table style="width:100%">
 @foreach($passportstatus as $passportstat)
  <tr>
    <td><a href="{{action('PassportStatusController@show',[$passportstat->id])}}"><h4>{{$passportstat->Passport_Number}}</h4></a></td>
  <td>{{$passportstat->Status_Name}}</h4></a></td>

  {{--<td><a class="btn btn-warning" href="{{action('PassportController@edit',[$passport->id])}}" role="button">Edit</a>

    
<a class="btn btn-danger" href="{{action('PassportController@destroy',[$passport->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>--}}
{{--{!!Form::close()!!}--}}
</td>
 

  </tr>
 
 @endforeach
</table>


{{--<div class="body">{{$page->details}}</div>--}}


@endsection
