@extends('admin.adminmaster')

@section('content')

<h2>Create categories</h2>

{!!Form::open(['url'=>'admin/categories'])!!}
<div class="form-goup">
{!!Form::label('title','title')!!}
{!!Form::text('title',null,['class'=>'form-control'])!!}
</div>

<div class="form-goup">
{!!Form::label('details','details')!!}
{!!Form::textarea('details',null,['class'=>'form-control'])!!}
</div>
{!!Form::Label('show_in_menu','show_in_menu')!!}
{!!Form::checkbox('show_in_menu',1,null,['class'=>'form-control'])!!}

<div class="form-group">
{!!Form::submit('Add category',['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@endsection
