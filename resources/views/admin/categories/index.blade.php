@extends('admin.adminmaster')

@section('content')

<h2>Category list </h2>
<a class="btn btn-primary" href="categories/create" role="button">+ Add New Category</a>
<hr>

<table style="width:100%">

@foreach($categories as $category)  
     <tr>
<td><a href="{{action('Categoriescontroller@show',[$category->id])}}"><h4>{{$category->title}}</h4></a></li>
<td><a class="btn btn-warning" href="{{action('CategoriesController@edit',[$category->id])}}" role="button">Edit</a>
<a class="btn btn-danger" href="{{action('CategoriesController@destroy',[$category->id])}}" role="button"><span class="glyphicon glyphicon-trash"></span> Delete</a>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection