<!--header start here-->

<header>


    <div class="nav-wrapper">
        <div class="nav-wrapper-inner">
            <div class="container">
                <div class="social-icons">
                    <ul class="">
                        <li><a href="#" target="_self"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_self"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_self"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_self"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>



            <div class="menu">
                <div class="line-top"></div>
                <nav class="navbar navbar-default ">
                    <div class="container">
                        <div class="navbar-header"> <a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <?php  $base=basename($_SERVER['PHP_SELF']); ?>
                            <ul class="nav navbar-nav navbar-right">
                                <li <?php if($base=='about.php' ){?>class="active" <?php } ?>><a href="{{ url('/about') }}" >About</a></li>
                                <li <?php if($base=='know-more.php' ){?>class="active" <?php } ?>><a href="{{ url('/faq') }}#faq-section">FAQ</a></li>
                                <li  <?php if($base=='login.php' ){?>class="active" <?php } ?>><a href="{{ url('/login') }}" > Sign In</a></li>
                                <li  <?php if($base=='register.php' ){?>class="active" <?php } ?>><a href="{{ url('/register') }}" >Register</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="line-bottom"></div>

            </div>
        </div>
    </div>
</header>
<!--header end here-->
