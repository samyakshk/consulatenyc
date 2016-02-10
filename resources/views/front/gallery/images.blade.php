@extends('front.frontmaster')

@section('content')
<?php

use App\Album;
use App\Images;
 $albums=Album::latest()->get();
  ?>

<div class="container">
    
      <div class="starter-template">
        <div class="media">
          
 <img class="media-object pull-left"alt="{{$album->name}}" src="{{URL::asset('albums/'.$album->cover_image)}}" width="180px">
  

          <div class="media-body">
            <h2 class="media-heading" style="font-size: 26px;">Album Name:</h2>
            <p>{{$album->name}}</p>
          <div class="media">
          <h2 class="media-heading" style="font-size: 26px;">AlbumDescription :</h2>
          <p>{{$album->description}}<p>
         
        
        </div>
      </div>
    </div>
    </div>
    <hr>
      <div class="row">
        @foreach($album->Photos as $photo)
          <div class="col-lg-3">
            <div class="thumbnail" style="max-height: 350px;min-height: 350px;">
              <img alt="{{$album->name}}" src="{{URL::asset('albums/'.$photo->image)}}">


              <div class="caption">
                <p>{{$photo->description}}</p>
                <p><p>Created date:  {{ date("d F Y",strtotime($photo->created_at)) }} </p></p>
               
                 
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>

@endsection