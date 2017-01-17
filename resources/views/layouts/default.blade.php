<html>
<head>
	<title>ESP ENGLISH</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href={{Asset('public/css/bootstrap.min.css')}}>
	<link rel="stylesheet" type="text/css" href={{Asset('public/css/style.css')}}>
	<link href={{Asset('public/images/favicon.ico')}} rel = "shortcut icon" type="image/x-icon">
	<script type="text/javascript" src={{Asset('public/template/ckeditor/ckeditor.js')}} ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript" src={{Asset('public/js/bootstrap.min.js')}}></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1727282974222089',
	      xfbml      : true,
	      version    : 'v2.5'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	@include('includes.header')
	<div id="main">
		 @yield('content')
	</div>
	@include('includes.footer')
</body>
</html>