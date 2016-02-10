@extends('front.frontmaster')

@section('content')
<?php
        use App\Home;
      
         $homes=Home::latest()->get();
        
        ?>
	
<div class="row">
	<div class="col-sm-8">
		@foreach($homes as $home)
				<h4><b>{{$home->title}}</b></h4>
					<p>{!!$home->body!!}</p>
	 	@endforeach
	 	<br>
	 	<br>
</div>
<div class="col-sm-4">
	@if($errors->any())

	  {!!$errors->first()!!} 
	
@endif
<h4>Check your Passport Status</h4>
{!!Form::open(['url'=>'admin/statusCheck','target'=>'_top'])!!}
		<fieldset class="form-group">
			<label>Full Name:</label>
				<input type="text" name="fullname" class="form-control" placeholder="Your Full Name" >
		</fieldset>
		<fieldset class="form-group">
			<label>Date of birth:</label>
				<input type="date" name="dob" class="form-control"  >
		</fieldset>
		<fieldset class="form-group">
			<label>Passport Number:</label>
				<input type="text" name="passportNum" class="form-control" placeholder="Your Passport Number" >
		</fieldset>
		<button type="submit" class="btn btn-primary">Search</button>
	{!!Form::close()!!}
</div>
</div>

@endsection