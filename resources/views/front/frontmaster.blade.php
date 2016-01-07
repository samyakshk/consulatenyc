
<html>

    <head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>Consulate Nepal </title>
    </head>
   


<body>
     
  <?php
        use App\Pages;
        use App\Categories;
         $pages=Pages::latest()->get();
         $categories=Categories::latest()->get();
        ?>
          
 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/',null)}}" class="pull-left">Consulate Nepal</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/',null)}}">Home</a></li>
        @foreach($categories as $category )
        <li class="dropdown">
         
          <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$category->title}}<span class="caret"></span></a>
         

          <ul class="dropdown-menu">
            @foreach($category->pages as $page)
            <li><a href="{{action('publicpagecontroller@show',[$page->id])}}">{{$page->title}}</a></li>
            @endforeach
                     </ul>
        </li>
        @endforeach

<li><a href="{{url('front/contact',null)}}">Contact Us</a></li>
</ul>
      
    </div>
  </div>
</nav>

        <div class="container">
 {{--<img src="/laravel/consulatenyc/public/images/nepal-gov-logo.png" alt="logo">--}}
            @yield('content')
            <br>
            
        </div>


        <style>
.bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;

}
</style>

<br>

<div class="footer navbar-fixed-bottom">
<footer class="container-fluid bg-4 text-center">
  this is footer<br><br>
</footer>
</div>
    </body>
    <!-- Latest compiled and minified JavaScript -->

</html>