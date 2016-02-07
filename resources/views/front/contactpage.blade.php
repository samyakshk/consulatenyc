@extends('front.frontmaster')

@section('content')


<h2>Contact us at</h2>

			
	<form>
<fieldset class="form-group">
	<label>Full Name:</lable>
		<input type="text" class="form-control" placeholder="Your Full Name">
</fieldset>
<fieldset class="form-group">
	<label>Email:</lable>
		<input type="email" class="form-control" placeholder="Your email">
</fieldset>
<fieldset class="form-group">
	<label>Message</lable>
		<textarea class="form-control" rows="5" id="comment"></textarea>
</fieldset>
<button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection