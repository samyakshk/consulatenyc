@extends('admin.adminmaster')

@section('content')

<h2>{{$pages->title}}</h2>
<hr>
<p>{{$pages->category_id}}</p>
<p>{{$pages->image}}</p>
{!!$pages->details!!}


  
@endsection
