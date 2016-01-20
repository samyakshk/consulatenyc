 @extends('front.frontmaster')

@section('content')

<?php

use App\TouristVisa;
 $tvs=TouristVisa::latest()->get();
  ?>


 @foreach($tvs as $tv )
<h2>{{$tv->title}}</h2>
<p>{!!$tv->details!!}</p>


 	      @endforeach
 @endsection