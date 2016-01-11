@extends('admin.adminmaster')
@section('content')
 
<h2>Passport Status</h2>

{!!Form::open(['url'=>'admin/passportstatus'])!!}
<div class="form-goup">
{!!Form::label('Passport_Number','Passport Number')!!}
{!!Form::select('passport_id',$passports,null,['class'=>'form-control'])!!}
</div>

<div class="form-goup">
{!!Form::label('Status_Name','Status')!!}
{!!Form::select('Status_id',$statuses,null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
{!!Form::submit('Add',['class'=>'btn btn-primary'])!!}

	</div>
	{!!Form::close()!!}
@endsection
