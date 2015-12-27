@extends('admin.adminmaster')

@section('content')

<h2>Category list </h2>
<a class="btn btn-primary" href="categories/create" role="button">+ Add New Category</a>
<hr>

<table style="width:100%">

@foreach($categories as $category)  
     <tr>
<td><a href="{{action('Categoriescontroller@show',[$category->id])}}"><h4>{{$category->title}}</h4></a></li>
<td><button type="button" class="btn btn-warning">Edit</button>
<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
</td>
 

  </tr>
@endforeach
       
   </table>  
@endsection