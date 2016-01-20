 @extends('front.frontmaster')

@section('content')

<?php

use App\NRNID;
 $nrns=NRNID::latest()->get();
  ?>


 @foreach($nrns as $nrn )
<h2>{{$nrn->title}}</h2>
<p>{!!$nrn->details!!}</p>


 	      @endforeach
 @endsection