 @extends('front.frontmaster')

@section('content')

<?php

use App\Attestation;
 $ats=Attestation::latest()->get();
  ?>


 @foreach($ats as $at )
<h2>{{$at->title}}</h2>
<p>{!!$at->details!!}</p>


 	      @endforeach
 @endsection