@extends('admin.adminmaster')
@section('content')

<h2>edit {{$tours->title}} </h2>

{!!Form::model($tours,['method'=>'PATCH','action'=>['TourismController@update',$tours->id]])!!}
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
{!!Form::submit('edit page',['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@endsection
