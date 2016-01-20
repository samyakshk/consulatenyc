 @extends('front.frontmaster')

@section('content')

<?php

use App\OffVisa;
 $offs=OffVisa::latest()->get();
  ?>


 @foreach($offs as $off )
<h2>{{$off->title}}</h2>
<p>{!!$off->details!!}</p>


 	      @endforeach
 @endsection