 @extends('front.frontmaster')

@section('content')

<?php

use App\DipVisa;
 $dips=DipVisa::latest()->get();
  ?>


 @foreach($dips as $dip )
<h2>{{$dip->title}}</h2>
<p>{!!$dip->details!!}</p>


 	      @endforeach
 @endsection