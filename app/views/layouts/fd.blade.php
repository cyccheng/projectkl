<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/font-awesome-4.1.0/css/font-awesome.min.css">
	@yield('css')
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
	@yield('bheader')
    <div class='nav'>
		@include('includes.header')
    </div>

    <div class='container'>
		@yield('content')
    </div>
	
	<div class='footer'>
		@include('includes.footer');
	</div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation.js"></script>
    <script src="js/foundation.clearing.js"></script>
    <script>
      $(document).foundation();
    </script>
	@yield('bfooter')
  </body>
</html>
