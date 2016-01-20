
<html>

    <head>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
       <script src="//cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>
        <title>Consulate Nepal </title>
       
  
    </head>
   


<body>
       <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/admin',null)}}">Consulate admin page</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
      

      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        	<li><a href="#">Welcome {{Auth::user()->name}}</a></li>
			<li> <a href="{{url('/auth/logout',null)}}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		@else
      		 <li><a href="{{url('auth/register',null)}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			 <li><a href="{{url('auth/login',null)}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
     	@endif
      </ul>
    </div>
  </div>
</nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>