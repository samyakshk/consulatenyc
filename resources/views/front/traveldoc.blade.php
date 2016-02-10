 @extends('front.frontmaster')

@section('content')

<?php

use App\Traveldocument;
 $trds=Traveldocument::latest()->get();
  ?>


 @foreach($trds as $trd )
<h2>{{$trd->title}}</h2>
<p>{!!$trd->details!!}</p>


 	      @endforeach
 @endsection