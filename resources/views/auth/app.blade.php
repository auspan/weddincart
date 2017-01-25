<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="WeddingCart">

    <!-- Document Title
    ============================================= -->
    <title>WeddingCart | Transforming Indian Weddings</title>

    <!-- Stylesheets
    ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/effect.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="/images/favi.png" >

    <link rel="stylesheet" href="/validations/css/validationEngine.jquery.css" />

    <!-- External JavaScripts
 ============================================= -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body class="loginwrpbg">
    @include('home.header')
    <div class="inner-header"><img src="/images/inner-header.jpg"></div>
    @yield('content')
    @include('home.footer')
    @include('home.footerScript')

    <script type="text/javascript" src="/validations/js/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="/validations/js/jquery.validationEngine-en.js"></script>
    <script type="text/javascript">
        function BeforeAjaxFormValidation(form, options)
        {if (window.console){
            $("#myform").bind("jqv.field.result", function(event, field, errorFound, prompText){ if(errorFound) return false;});
            if(form.attr('id')=="myform")
            {}}
            return true;
        }
        function ajaxValidationCallback(status, form, json, options) {
            if(status == true)
            {
                if(form.attr('id')=="myform")
                {}
            }
        }
        $("#myform").validationEngine({
        });

    </script>

</body>
</html>