@extends('admin.adminmaster')

@section('content')
<h2>Pages list </h2>
<a class="btn btn-primary" href="pages/create" role="button">+ Add New Page</a>
<hr>
<table style="width:100%">
 @foreach($pages as $page)
  <tr>
    <td><a href="{{action('PagesController@show',[$page->id])}}"><h4>{{$page->title}}</h4></a></td>
   <td><a class="btn btn-warning" href="{{action('PagesController@edit',[$page->id])}}" role="button">Edit</a>

    {{--<button type="button" class="btn btn-warning" href="{{action('PagesController@edit',[$page->id])}}">Edit</button>--}}

{{--{!!Form::model($page,['method'=>'DELETE','action'=>['PagesController@destroy',$page->id]])!!}--}}
{{--<button type="button" class="btn btn-danger" href="admin/delete"><span class="glyphicon glyphicon-trash"></span> Delete</button>--}}
<a class="btn btn-danger" href="{{action('PagesController@destroy',[$page->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
{{--{!!Form::close()!!}--}}
</td>
 

  </tr>
 
 @endforeach
</table>


{{--<div class="body">{{$page->details}}</div>--}}


@endsection
@section('menu')
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/',null)}}">Consulate Nepal NYC</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/',null)}}">Home</a></li>
                 @foreach($pages as $page)  
        <li> 
<a href="{{action('PagesController@show',[$page->id])}}">{{$page->title}}</a>

</li>
@endforeach

</ul>
      
    </div>
  </div>
</nav>


 @endsection