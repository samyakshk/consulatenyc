@extends('admin.adminmaster')

@section('content')

<table style="width:100%">
 @foreach($homes as $home)
  <tr>
    <td><a href="{{action('homeController@show',[$home->id])}}"><h4>Preview homepage</h4></a></td>
   <td><a class="btn btn-warning" href="{{action('homeController@edit',[$home->id])}}" role="button">Edit</a>

</td>
 

  </tr>
 
 @endforeach
</table>

@endsection