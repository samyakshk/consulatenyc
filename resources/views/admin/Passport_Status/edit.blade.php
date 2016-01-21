@extends('admin.adminmaster')
@section('content')
 
<h2>Edit Status {{$passports->Full_Name}}</h2>
<hr>

{!!Form::model($passports,['method'=>'Patch','action'=>['PassportStatusController@update',$passports->id]])!!}
<div class="form-goup">
	{!!Form::label('Passport Number','Passport Number:')!!}
	{{$passports->Passport_Number}}

</div>
<div class="form-goup">
{!!Form::label('Full_Name','Full Name:')!!}
	{{$passports->Full_Name}}

</div>
<div class="form-goup">
{!!Form::label('Status_Name','Status')!!}
{!!Form::select('Status_id',$statuses,$passports->latestStatus()->id,['class'=>'form-control'])!!}
</div>


<div class="form-group">
{!!Form::submit('Add',['class'=>'btn btn-primary'])!!}

	</div>
	{!!Form::close()!!}
@endsection


