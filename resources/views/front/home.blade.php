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
<h4><b>Check your passport status</h4>
<form>
<fieldset class="form-group">
	<label>Full Name:</lable>
		<input type="text" class="form-control" placeholder="Your Full Name">
</fieldset>
<fieldset class="form-group">
	<label>Date of birth:</label>
		<input type="date" class="form-control" >
</fieldset>
<fieldset class="form-group">
	<label>Passport Number:</lable>
		<input type="text" class="form-control" placeholder="Your Passport Number">
</fieldset>
<button type="submit" class="btn btn-primary">Search</button>
</form>
</div>
</div>

@endsection