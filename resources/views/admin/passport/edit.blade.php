@extends('admin.adminmaster')
@section('content')
 
<h2>Store Passport Info</h2>

{!!Form::open(['url'=>'admin/passport'])!!}
<div class="form-goup">
{!!Form::label('Full_Name','Full Name')!!}
{!!Form::text('Full_Name',null,['class'=>'form-control'])!!}
</div>

<div class="form-goup">
{!!Form::label('Date_of_Birth','Date of Birth')!!}
{!! Form::input('date', 'Date_of_Birth', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
</div>

{!!Form::label('Passport_Number','Passport Number')!!}
{!!Form::text('Passport_Number',null,['class'=>'form-control'])!!}
<div class="form-goup">
{!!Form::label('Status_Name','Status')!!}
{!!Form::select('Status_Name',$statuses,null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!!Form::submit('Add',['class'=>'btn btn-primary'])!!}

	</div>
	{!!Form::close()!!}
@endsection
