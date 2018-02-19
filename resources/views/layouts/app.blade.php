<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Local Intranet</title>

<script src="../bootstrap/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/sb-admin-2.css">
	 <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="../bootstrap/css/style.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css" media="screen">
div{
	#padding: 1px;
	#border: 1px solid grey;
}	
body{
    background-color:   #f8f8f8;
}
#topdiv{
    border: 0.5px solid  #d5d2d2 ;
    height: 55px;
}
#midDiv{
    background-color: white;
}
.sideDiv{
    
}
a:focus, a:hover {
    text-decoration: none;
}
.thumbnail:hover{
    border: 5px solid grey;
}
</style>
<body>
 <div class="row">
        <div class="col-md-12" id="topdiv">
		        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
		</div>
    </div>
  


        @yield('content')
 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
