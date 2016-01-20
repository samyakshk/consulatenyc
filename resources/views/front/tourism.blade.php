 @extends('front.frontmaster')

@section('content')

<?php

use App\Tourism;
 $tours=Tourism::latest()->get();
  ?>


 @foreach($tours as $tour )
<h2>{{$tour->title}}</h2>
<p>{!!$tour->details!!}</p>


 	      @endforeach
 @endsection