@extends('admin.adminmaster')
@section('content')

<h2>edit {{$pages->title}} </h2>

{!!Form::model($pages,['method'=>'PATCH','action'=>['PagesController@update',$pages->id]])!!}
<div class="form-goup">
{!!Form::label('title','title')!!}
{!!Form::text('title',null,['class'=>'form-control'])!!}
</div>
<div class="form-goup">
{!!Form::label('url_title','url_title')!!}
{!!Form::text('url_title',null,['class'=>'form-control'])!!}
</div>

<div class="form-goup">
{!!Form::label('menu_title','menu_title')!!}
{!!Form::text('menu_title',null,['class'=>'form-control'])!!}
</div>


<div class="form-goup">
{!!Form::label('image','image')!!}
{!!Form::text('image',null,['class'=>'form-control'])!!}
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
