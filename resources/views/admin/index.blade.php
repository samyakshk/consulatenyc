@extends('admin.adminmaster')
@section('content')
 <h2>Welcome to Administrator page </h2>
<hr>

<a class="btn btn-primary" href="{{url('/admin/Homepage',null)}}" role="button">Edit Home Page</a>

<a class="btn btn-primary" href="{{url('/admin/passport',null)}}" role="button">Passports</a>

<a class="btn btn-primary" href="{{url('/admin/gallery',null)}}" role="button">Image Gallery</a>

<h3>Pages</h3>
{{--<a class="btn btn-primary" href="{{url('/admin/pages',null)}}" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Add pages</a>--}}
<div class="row">
<ul >
	 <div class="col-sm-2">
	<ul style="list-style: none;">About Us
		<li><a href="{{url('/admin/consular',null)}}">Consular General</a></li>
		<li><a href="{{url('/admin/orgstruc',null)}}">Organistion Structure</a></li>
	</ul>	
	</div>
		 <div class="col-sm-2">
	<ul style="list-style: none;">Visas
		<li><a href="{{url('/admin/diplomacyvisa',null)}}">Diplomacy Visa</a></li>
		<li><a href="{{url('/admin/officialvisa',null)}}">Official VIsa</a></li>
		<li><a href="{{url('/admin/touristvisa',null)}}">Tourist Visa</a></li>
	</ul>	
			</div>

	 <div class="col-sm-2">
	<ul style="list-style: none;">Services
		<li><a href="{{url('/admin/powerofattorney',null)}}">Power of Attorney</a></li>
		<li><a href="{{url('/admin/attestation',null)}}">Attestation</a></li>
		<li><a href="{{url('/admin/nrnid',null)}}">NRN ID</a></li>
	</ul>	
		</div>
	 <div class="col-sm-2">
<ul style="list-style: none;">Business
	<li><a href="{{url('/admin/tourism',null)}}">Tourism</a></li>
	<li><a href="{{url('/admin/trade',null)}}">Trade</a></li>
	<li><a href="{{url('/admin/investment',null)}}">Investment</a></li>
	</ul>	
		</div>
	 <div class="col-sm-2">
<ul style="list-style: none;">News $ Events
    <li><a href="{{url('/admin/holiday',null)}}">Public Holiday</a></li>

    <li><a href="{{url('/admin/notice',null)}}">Notices</a></li>

    <li><a href="{{url('/admin/press',null)}}">Press Releases</a></li>
</ul>

		</div>
 <div class="col-sm-2">
<ul style="list-style: none;">Passports
    <li><a href="{{url('/admin/travel',null)}}">Travel document</a></li>

    
</ul>

		</div>

</ul>
	
</div>





@endsection