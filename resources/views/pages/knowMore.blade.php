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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    {{--<script type="text/javascript" src="js/plugins.js"></script>--}}
    {{--<script type="text/javascript" src="js/datepicker.js"></script>--}}



</head>
<body class="loginwrpbg">
    @include('home.header')
    <div class="inner-header"><img src="images/inner-header.jpg"></div>

    <!--main content start here-->
    <section class="content">
        <div class="container white-tranbg">
            <div class="row">
                @include('pages.knowMoreText')
            </div>
            <div class="row" id="faq-section" style="margin-top: -80px">
                @include('pages.faq')
            </div>
        </div>
    </section>

    <div class="container">
        <div class="regbtnmain">
            <a href='{{ url('register') }}' class="center-block hvr-bounce-to-right">Register Now
            </a>
        </div>
    </div>

    <!--main content end here-->
    @include('home.footer')
    @include('home.footerScript')
    <script src='js/jquery.velocity.min.js'></script>
    <script src="js/mtree.js"></script>
    <script>
        $(document).ready(function() {
            var mtree = $('ul.mtree');
            // Skin selector for demo
            mtree.wrap('');
            var skins = [''];
            mtree.addClass(skins[0]);
            $('body').prepend('<div class="mtree-skin-selector"><ul class="button-group radius"></ul></div>');
            var s = $('.mtree-skin-selector');
            $.each(skins, function(index, val) {
                s.find('ul').append('<li><button class="small skin">' + val + '</button></li>');
            });
            s.find('ul').append('<li><button class="small csl active"></button></li>');
            s.find('button.skin').each(function(index){
                $(this).on('click.mtree-skin-selector', function(){
                    s.find('button.skin.active').removeClass('active');
                    $(this).addClass('active');
                    mtree.removeClass(skins.join(' ')).addClass(skins[index]);
                });
            })
            s.find('button:first').addClass('active');
            s.find('.csl').on('click.mtree-close-same-level', function(){
                $(this).toggleClass('active');
            });
        });
    </script>

    <script>
        setTimeout(function(){
            $('#overlay').modal('show');
        }, 8000)

        $('#overlay').modal('hide');
    </script>

</body>
</html>