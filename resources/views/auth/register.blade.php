@extends('auth.app')

@section('content')

        <!--main content start here-->
@include('pages.flash')
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create your Account</h1>
                <hr class="style2">
                <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">

                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>

                        </div>


                        <div style="padding-top:30px" class="panel-body">
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            <form class="form-horizontal" id="myform" method="post" action="/register" name="myform">
                                {!! csrf_field() !!}
                                <div style="margin-bottom: 25px" class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control validate[required]"
                                           name="name" value=""
                                           placeholder="Name">
                                </div>
                                <div style="margin-bottom: 25px" class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="E-Mail" type="text" class="form-control validate[required]" name="email"
                                           value=""
                                           placeholder="E-Mail Address:">
                                </div>


                                <div style="margin-bottom: 25px" class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-th-list"></i></span>
                                    <select type="text" id="Categories" class="form-control validate[required]"
                                            role="multiselect">
                                        <option value="0" selected="selected">Select Categories</option>
                                        <option value="1">Couple</option>
                                        <option value="2">Guest</option>

                                    </select>
                                </div>


                                <div style="margin-bottom: 25px" class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control validate[required]"
                                           name="password" placeholder="Password">
                                </div>
                                <div style="margin-bottom: 25px" class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-lock"></i></span>
                                    <input id="Confirm-Password" type="password" class="form-control validate[required]"
                                           name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                        <button class="hvr-bounce-to-right btn" type="submit"> Register Now</button>

                                        <div class="clearfix"></div>
                                        <hr>
                                        <h4> Or Login with:</h4>


                                        <div class="facebook-btn">
                                            <ul>
                                                <li class="facebook hvr-bounce-to-right"><a
                                                            href="{{ url('/social/auth/redirect', ['facebook']) }}">
                                                        <span> Facebook </span></a>
                                                </li>


                                                <li><span>Or</span>
                                                </li>


                                                <li class="gmail hvr-bounce-to-right"><a
                                                            href="{{ url('/social/auth/redirect', ['google']) }}">
                                                        <span>G-mail</span></a>
                                                </li>

                                            </ul>


                                        </div>


                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main content end here-->


@stop