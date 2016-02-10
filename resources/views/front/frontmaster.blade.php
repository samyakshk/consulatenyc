
<html>

    <head>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
<style>
.navbar {
      
      background-color: #c1dbf5;
    }
   
   .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #6f0b08 !important;
      background-color: #fe3324 !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #12163d !important;
  }
   .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }

</style>
        <title>Consulate Nepal </title>
  


    </head>
   


<body>
     
  <?php
        use App\Pages;
      
      
         $pages=Pages::latest()->get();
        
        
        ?>
       
 <div class="container-fluid" style="background-color:#071553;color:#f63e2a;height:200px;">
  
        
   <img src="{{URL::asset('images/banner2.gif')}}" alt="logo" height="200px" float:"left" width="100%" >

    
     
  </div>
  
</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="{{url('/',null)}}" class="pull-left"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="{{url('/',null)}}">Home</a></li>
         <li class="dropdown">
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/',null)}}">About Us<span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="{{url('/front/consular',null)}}">Consular General</a></li>

                   <li><a href="{{url('/front/orgstruc',null)}}">Organisation Structure</a></li>
           
      
            </li>
       
          </ul>
        </li>
         <li class="dropdown">
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/',null)}}">Visa<span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="{{url('/front/DipVisa',null)}}">Diplomacy Visa</a></li>
          <li><a href="{{url('/front/Tvisa',null)}}">Tourist Visa</a></li>
          <li><a href="{{url('/front/OffVisa',null)}}">Official Visa</a></li> 
          </ul>
        </li>
   <li class="dropdown">
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/',null)}}">Services<span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="{{url('/front/POA',null)}}">Power of Attorney</a></li>
          <li><a href="{{url('/front/Attestation',null)}}">Attestation</a></li>
          <li><a href="{{url('/front/NRNID',null)}}">NRN ID</a></li> 
          </ul>
        </li>


          <li class="dropdown">
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/',null)}}">Passport<span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="{{url('/front/travel',null)}}">Travel Documents</a></li>
        
          </ul>
        </li>





          <li class="dropdown">
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/',null)}}">Ecomomic Diplomacy<span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="{{url('/front/tourism',null)}}">Tourism</a></li>
          <li><a href="{{url('/front/trade',null)}}">Trade</a></li>
          <li><a href="{{url('/front/investment',null)}}">Investment</a></li> 
          </ul>
        </li>


  <li class="dropdown">
        <li><a class="dropdown-toggle" data-toggle="dropdown" href="{{url('/',null)}}">News & events<span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="{{url('/front/press',null)}}">Press Release</a></li>
          <li><a href="{{url('/front/holiday',null)}}">Public Holidays</a></li>
          <li><a href="{{url('/front/notice',null)}}">Notice</a></li> 
          </ul>
        </li>
       
  
        </li>
        @foreach($pages as $page) 
      <li><a href="{{action('publicpagecontroller@show',[$page->id])}}">{{$page->title}}</a></li>
  @endforeach
  <li><a href="{{url('front/gallery',null)}}">Gallery</a></li>
<li><a href="{{url('front/contact',null)}}">Contact Us</a></li>
</ul>
      </div>
    </div>
  </div>
</nav>





        <div class="container"  style="height:900px; overflow: auto;">

            @yield('content')
            <br>
            
        </div>


        <style>
.bg-4 { 
    background-color: #050d31;
    color: #ffffff;

}
.col-sm-2 li a{
color: #fff;

}
.col-sm-2 li a:hover, .navbar-nav li.active a {
      color: #6f0b08 !important;
      background-color: #abbff9 !important;
  }
</style>

<br>

<div class="footer navbar">
<footer class="container-fluid bg-4 text-center">
 
<div class="row">
  <div class="col-sm-2">
    <ul style="list-style: none;">Passport
          <li><a href="{{url('/front/travel',null)}}">Travel Documents</a></li>
        <li></li>
    </ul>
  </div>
  <div class="col-sm-2">
       <ul style="list-style: none;">Econimic Diplomcy
        <li><a href="{{url('/front/tourism',null)}}">Tourism</a></li>
          <li><a href="{{url('/front/trade',null)}}">Trade</a></li>
         <li><a href="{{url('/front/investment',null)}}">Investment</a></li> 
    </ul>

  </div>
  <div class="col-sm-2">
         <ul style="list-style: none;">Visa
         <li><a href="{{url('/front/DipVisa',null)}}">Diplomacy Visa</a></li>
          <li><a href="{{url('/front/Tvisa',null)}}">Tourist Visa</a></li>
          <li><a href="{{url('/front/OffVisa',null)}}">Official Visa</a></li> 
    </ul>
  </div>
 
</div>

</footer>
</div>
    </body>
   
</html>