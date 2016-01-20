@extends('admin.adminmaster')

@section('content')

<h2>Create Press Releases</h2>

{!!Form::open(['url'=>'admin/press'])!!}
<div class="form-goup">
{!!Form::label('title','title')!!}
{!!Form::text('title',null,['class'=>'form-control'])!!}
</div>

<div class="form-goup">
{!!Form::label('details','details')!!}
{!!Form::textarea('details',null,['class'=>'form-control'])!!}
<script>
            CKEDITOR.replace( 'details' );
        </script>
</div>


<div class="form-group">
{!!Form::submit('Add',['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@endsection
