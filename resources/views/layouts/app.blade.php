<!DOCTYPE html>
<html>
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
    @yield('content')
    @show
   
	<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>