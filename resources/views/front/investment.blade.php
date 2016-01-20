 @extends('front.frontmaster')

@section('content')

<?php

use App\Investment;
 $invs=Investment::latest()->get();
  ?>


 @foreach($invs as $inv )
<h2>{{$inv->title}}</h2>
<p>{!!$inv->details!!}</p>


 	      @endforeach
 @endsection