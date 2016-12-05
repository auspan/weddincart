<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta name="author" content="WeddingCart">
    <meta name="_token" content="{{ csrf_token() }}">

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

    <link rel="stylesheet" href="validations/css/validationEngine.jquery.css" />

    <link rel="stylesheet" type="text/css" href="datetimepicker-master/jquery.datetimepicker.css">
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/fileinput.js" type="text/javascript"></script>

</head>

<body   class="loginwrpbg">
@include('home.afterLoginHeader')
<div class="inner-header"><img src="images/inner-header.jpg"></div>

@yield('content')

@include('home.footer')
@include('home.footerScript')
</body>
</html>
