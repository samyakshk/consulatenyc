@extends('admin.adminmaster')
@section('content')
 
<h2>Store Passport Info</h2>

{!!Form::open(['url'=>'admin/passport'])!!}
<div class="form-goup">
{!!Form::label('Full_Name','Full Name')!!}
{!!Form::text('Full_Name',null,['class'=>'form-control'])!!}
</div>
{{--<fieldset class="form-group">
	<label>Date of birth:</label>
		<input type="date" class="form-control" >
</fieldset>--}}
<div class="form-goup">
{!!Form::label('Date_of_Birth','Date of Birth')!!}
{!! Form::input('date', 'Date_of_Birth', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
</div>
{{--<div class="form-goup">
{!!Form::label('Date of Birth','Date of Birth')!!}
{!! Form::text('date', '', array('id' => 'datepicker')) !!}
</div>--}}

{{--<div class="form-goup">a
{!!Form::label('_id','category')!!}
{!!Form::select('category_id',$categories,null,['class'=>'form-control'])!!}
</div>--}}
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
