@extends('admin.adminmaster')
@section('content')

<h3>Are you sure you want to delete this page?</h3>

<button type="button" class="btn btn-danger" href="{{action('PagesController@destroy',[$page->id])}}">Yes</button>

<button type="button" class="btn btn-primary" href="admin/pages">cancel</button>
@endsection

 