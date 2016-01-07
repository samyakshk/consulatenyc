@extends('admin.adminmaster')
@section('content')

<h2>Status list </h2>
<a class="btn btn-primary" href="status/create" role="button">+ Add New Status</a>
<hr>
<table style="width:100%">
 @foreach($stats as $stat)
  <tr>
    <td>{{$stat->Status_Name}}</td>
   <td><a class="btn btn-warning" href="{{action('StatusController@edit',[$stat->id])}}" role="button">Edit</a>

    {{--<button type="button" class="btn btn-warning" href="{{action('PagesController@edit',[$page->id])}}">Edit</button>--}}

{{--{!!Form::model($page,['method'=>'DELETE','action'=>['PagesController@destroy',$page->id]])!!}--}}
{{--<button type="button" class="btn btn-danger" href="admin/delete"><span class="glyphicon glyphicon-trash"></span> Delete</button>--}}
<a class="btn btn-danger" href="{{action('StatusController@destroy',[$stat->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
{{--{!!Form::close()!!}--}}
</td>
 

  </tr>
 
 @endforeach
</table>


{{--<div class="body">{{$page->details}}</div>--}}


@endsection
