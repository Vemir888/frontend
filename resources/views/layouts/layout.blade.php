<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    

	    <title>@yield('title')</title>
	    
	  	<link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
	  	<link rel="stylesheet" href="{{ url('/assets/css/shop-homepage.css') }}">

	    <!-- Bootstrap core CSS -->


	    <!-- Custom styles for this template -->


	    <!-- Just for debugging purposes. Don't actually copy this line! -->
	    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <style type="text/css">
	    </style>
	</head>

  <body>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    @yield('navbar')

    @yield('content')

    @yield('footer')
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('/assets/js/jquery.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
	<script>
	    $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("active");
		});
    </script>
</body>

</html>