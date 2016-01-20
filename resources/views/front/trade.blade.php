 @extends('front.frontmaster')

@section('content')

<?php

use App\Trade;
 $trades=Trade::latest()->get();
  ?>


 @foreach($trades as $trade )
<h2>{{$trade->title}}</h2>
<p>{!!$trade->details!!}</p>


 	      @endforeach
 @endsection