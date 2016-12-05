<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<meta name="author" content="WeddingCart">

	<!-- Document Title
    ============================================= -->
	<title>WeddingCart | Transforming Indian Weddings</title>

	<!-- Stylesheets
    ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/effect.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="images/favi.png" >



	<!-- External JavaScripts
    ============================================= -->
	{{--<script type="text/javascript" src="js/jquery.js"></script>--}}
	{{--<script type="text/javascript" src="js/plugins.js"></script>--}}
	{{--<script type="text/javascript" src="js/datepicker.js"></script>--}}



</head>

<body>
	@yield('content')
			<!-- Footer Scripts
			=	============================================ -->
	<script src="bxslider/jquery.min.js"></script>
	<script src="bxslider/jquery.bxslider.min.js"></script>

	<!-- bxSlider CSS file -->
	<link href="bxslider/jquery.bxslider.css" rel="stylesheet" />
	<script>
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


</body>


</html>