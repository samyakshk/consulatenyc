 @extends('front.frontmaster')

@section('content')

<?php

use App\PowerofAttorney;
 $poas=PowerofAttorney::latest()->get();
  ?>


 @foreach($poas as $poa )
<h2>{{$poa->title}}</h2>
<p>{!!$poa->details!!}</p>


 	      @endforeach
 @endsection