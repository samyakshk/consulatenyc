@extends('admin.adminmaster')
@section('content')
 <h2>Welcome to Administrator page </h2>
<hr>

<a class="btn btn-primary" href="{{url('/admin/Homepage',null)}}" role="button">Edit Home Page</a>

<a class="btn btn-primary" href="{{url('/admin/passport',null)}}" role="button">Passports</a>

<h3>Pages</h3>
<ul>
	<ul>About Us
		<li><a href="{{url('/admin/consulargeneral',null)}}">Consular General</a></li>
		<li><a href="{{url('/admin/orgstruc',null)}}">Organistion Structure</a></li>
	</ul>	

	<ul>Visas
		<li><a href="{{url('/admin/diplomacyvisa',null)}}">Diplomacy Visa</a></li>
		<li><a href="{{url('/admin/officialvisa',null)}}">Official VIsa</a></li>
		<li><a href="{{url('/admin/touristvisa',null)}}">Tourist Visa</a></li>
	</ul>	
	


	<ul>Services
		<li><a href="{{url('/admin/powerofattorney',null)}}">Power of Attorney</a></li>
		<li><a href="{{url('/admin/attestation',null)}}">Attestation</a></li>
		<li><a href="{{url('/admin/nrnid',null)}}">NRN ID</a></li>
	</ul>	

<ul>Business
	<li><a href="{{url('/admin/tourism',null)}}">Tourism</a></li>
	<li><a href="{{url('/admin/trade',null)}}">Trade</a></li>
	<li><a href="{{url('/admin/investment',null)}}">Investment</a></li>
	</ul>	

<ul>News $ Events
    <li><a href="{{url('/admin/holiday',null)}}">Public Holiday</a></li>

    <li><a href="{{url('/admin/notice',null)}}">Notices</a></li>

    <li><a href="{{url('/admin/press',null)}}">Press Releases</a></li>
</ul>




</ul>







@endsection