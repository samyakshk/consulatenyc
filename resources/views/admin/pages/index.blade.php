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


 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span>Delete</button>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
     
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this?</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" href="{{action('PagesController@destroy',[$page->id])}}" role="button"> Yes</a>
       	<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        </div>
      </div>

</td>
 

  </tr>
 
 @endforeach
</table>




@endsection
