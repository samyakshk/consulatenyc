@extends('admin.adminmaster')
@section('content')

<h2>Passport list </h2>
<a class="btn btn-primary" href="passport/create" role="button">+ Add New Passport</a>

<hr>
<table style="width:100%">
 @foreach($passports as $passport)
  <tr>
    <td><a href="{{action('PassportController@show',[$passport->id])}}"><h4>{{$passport->Full_Name}}</h4></a></td>
   <td><a class="btn btn-warning" href="{{action('PassportController@edit',[$passport->id])}}" role="button">Edit</a>

    {{--<button type="button" class="btn btn-warning" href="{{action('PagesController@edit',[$page->id])}}">Edit</button>--}}

{{--{!!Form::model($page,['method'=>'DELETE','action'=>['PagesController@destroy',$page->id]])!!}--}}
{{--<button type="button" class="btn btn-danger" href="admin/delete"><span class="glyphicon glyphicon-trash"></span> Delete</button>--}}
<a class="btn btn-danger" href="{{action('PassportController@destroy',[$passport->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
{{--{!!Form::close()!!}--}}
</td>
 

  </tr>
 
 @endforeach
</table>


{{--<div class="body">{{$page->details}}</div>--}}


@endsection
