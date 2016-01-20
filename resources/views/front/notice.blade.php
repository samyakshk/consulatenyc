 @extends('front.frontmaster')

@section('content')

<?php

use App\Notice;
 $nots=Notice::latest()->get();
  ?>


 @foreach($nots as $not )
<h2>{{$not->title}}</h2>
<p>{!!$not->details!!}</p>


 	      @endforeach
 @endsection