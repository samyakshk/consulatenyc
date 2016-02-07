@extends('admin.adminmaster')

@section('content')

    
    <style>
     
      .starter-template {
        padding: 40px 15px;
      text-align: center;
      }
    </style>

      <a class="btn btn-primary" href="{{URL::route('create_album_form')}}" role="button">Create new album</a>

    
      <div class="container">
    
        <div class="starter-template">
      
        <div class="row">
          @foreach($albums as $album)
            <div class="col-lg-3">
              <div class="thumbnail" style="min-height: 514px;">
                <img alt="{{$album->name}}" src="{{URL::asset('albums/'.$album->cover_image)}}">
                <div class="caption">
                  <h3>{{$album->name}}</h3>
                  <p>{{$album->description}}</p>
                  <p>{{count($album->Photos)}} image(s).</p>
                  <p>Created date:  {{ date("d F Y",strtotime($album->created_at)) }} </p>
                  <p><a href="{{URL::route('show_album',array('id'=>$album->id))}}" class="btn btn-big btn-default">Show Gallery</a></p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
    
      </div><!-- /.container -->
    </div>
    

@endsection