@extends('admin.adminmaster')
@section('content')
 
<h2>Status</h2>

{!!Form::open(['url'=>'admin/status'])!!}
<div class="form-goup">
{!!Form::label('Status_Name','Status name')!!}
{!!Form::text('Status_Name',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::submit('Add status',['class'=>'btn btn-primary'])!!}

	</div>
	{!!Form::close()!!}
@endsection
