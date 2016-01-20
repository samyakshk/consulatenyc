 @extends('front.frontmaster')

@section('content')

<?php

use App\ConsularGen;
 $cons=ConsularGen::latest()->get();
  ?>


 @foreach($cons as $con )
<h2>{{$con->title}}</h2>
<p>{!!$con->details!!}</p>


 	      @endforeach
 @endsection