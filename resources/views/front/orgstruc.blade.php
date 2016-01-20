 @extends('front.frontmaster')

@section('content')

<?php

use App\OrgStruc;
 $orgs=OrgStruc::latest()->get();
  ?>


 @foreach($orgs as $org )
<h2>{{$org->title}}</h2>
<p>{!!$org->details!!}</p>


 	      @endforeach
 @endsection