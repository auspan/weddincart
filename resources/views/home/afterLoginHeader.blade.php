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
                                <li <?php if($base=='start.php' ){?>class="active" <?php } ?>><a href="start.php" >Start</a></li>
                                <li <?php if($base=='couple.php' ){?>class="active" <?php } ?>><a href="couple.php"> The Couple</a></li>
                                <li  <?php if($base=='wish-list.php' ){?>class="active" <?php } ?>><a href="wish-list.php" > Wish List</a></li>
                                <li  <?php if($base=='function.php' ){?>class="active" <?php } ?>><a href="function.php" >Functions</a></li>
                                <li  <?php if($base=='guests.php' ){?>class="active" <?php } ?>><a href="guests.php" >Guests</a></li>
                                </li>
                                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('\logout') }}">Logout</a></li>
                                    </ul>
                                </li>
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