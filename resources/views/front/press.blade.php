 @extends('front.frontmaster')

@section('content')

<?php

use App\Press;
 $presses=Press::latest()->get();
  ?>


 @foreach($presses as $press )
<h2>{{$press->title}}</h2>
<p>{!!$press->details!!}</p>


 	      @endforeach
 @endsection