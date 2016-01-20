 @extends('front.frontmaster')

@section('content')

<?php

use App\PublicHoliday;
 $hols=PublicHoliday::latest()->get();
  ?>


 @foreach($hols as $hol )
<h2>{{$hol->title}}</h2>
<p>{!!$hol->details!!}</p>


 	      @endforeach
 @endsection