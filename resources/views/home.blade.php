<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	{{-- Meta Tags --}}
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="_token" content="{{ csrf_token() }}">
	<meta name="author" content="WeddingCart">

	<!-- Document Title
    ============================================= -->
	<title>WeddingCart | Transforming Indian Weddings</title>

	<!-- Stylesheets (header-stylesheets)
    ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/effect.css">
	<link rel="stylesheet" href="/css/fonts.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link rel="stylesheet" href="/css/popup.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="/images/favi.png" >

	<!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>

	{{--<script type="text/javascript" src="js/datepicker.js"></script>--}}

</head>

<body>
	@yield('content')
			<!-- Footer Scripts
			=	============================================ -->
	{{--<script src="js/bxslider/jquery.min.js"></script>--}}
	<script src="js/bxslider/jquery.bxslider.min.js"></script>

	<!-- bxSlider CSS file -->
	<link href="js/bxslider/jquery.bxslider.css" rel="stylesheet" />

	<script type="text/javascript">
		$(document).ready(function(){

			$('#header').bxSlider({
				auto: true,
				minSlides: 1,
				maxSlides: 1,
				autoHover: true,
				captions: true,
				slideMargin: 0
			});

			$('#testimonial').bxSlider({
				auto: true,
				pagerCustom: '#bx-pager'
			});


		});
	</script>

	<script type="text/javascript" src="js/main.js"></script>


	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-36251023-1']);
		_gaq.push(['_setDomainName', 'jqueryscript.net']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
</body>
</html>