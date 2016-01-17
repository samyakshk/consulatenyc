@extends('admin.adminmaster')


@section('content')

<h2>{{$homes->title}}</h2>
{!!$homes->body!!}
  
@endsection