<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Waybill Manager v1.0</title>

    <!-- Bootstrap Core CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	
    <![endif]-->
	
	<script src="../bootstrap/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/sb-admin-2.css">
	 <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="../bootstrap/css/style.css" rel="stylesheet" type="text/css">
@section('header')
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('login') }}">Home</a>
            </div>
            <!-- /.navbar-header -->
	
            <ul class="nav navbar-top-links navbar-right">
			@if (Auth::guest())
				 <li><a href="{{ route('login') }}">Login</a></li>
			 @else


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="divider">{{ Auth::user()->name}}</li>
                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout
			
									</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
				<li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                <!-- /.dropdown -->
				
			@endif
            </ul>
            <!-- /.navbar-top-links -->
			@section('navbar')
			
			@show
        </nav>

        

              @yield('content')
            <!-- /.row -->
    
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


	
	
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>
