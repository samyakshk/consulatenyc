@extends('admin.adminmaster')
@section('content')

<h2>edit Home Page</h2>

{!!Form::model($homes,['method'=>'PATCH','action'=>['homeController@update',$homes->id]])!!}
<div class="form-goup">
{!!Form::label('title','title')!!}
{!!Form::text('title',null,['class'=>'form-control'])!!}
</div>


<div class="form-goup">
{!!Form::label('body','body')!!}
{!!Form::textarea('body',null,['class'=>'form-control'])!!}

 <script>
            CKEDITOR.replace( 'body' );
        </script>
</div>

</div>


<div class="form-group">
{!!Form::submit('edit page',['class'=>'btn btn-primary'])!!}
	</div>
	{!!Form::close()!!}
@endsection
