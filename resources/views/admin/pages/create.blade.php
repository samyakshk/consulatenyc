@extends('admin.adminmaster')
@section('content')

<h2>Create pages</h2>

{!!Form::open(['url'=>'admin/pages'])!!}
<div class="form-goup">
{!!Form::label('title','title')!!}
{!!Form::text('title',null,['class'=>'form-control'])!!}
</div>

<div class="form-goup">
{!!Form::label('image','image')!!}
{!!Form::text('image',null,['class'=>'form-control'])!!}
</div>


<div class="form-goup">
{!!Form::label('details','details')!!}
{!!Form::textarea('details',null,['class'=>'form-control'])!!}
</div>
<div class="form-goup">a
{!!Form::label('category_id','category')!!}
{!!Form::select('category_id',$categories,null,['class'=>'form-control'])!!}
</div>

{!!Form::Label('is_published','is published')!!}
{!!Form::checkbox('is_published',1,null,['class'=>'form-control'])!!}
<div class="form-group">
{!!Form::submit('Add page',['class'=>'btn btn-primary'])!!}

	</div>
	{!!Form::close()!!}
@endsection
