@extends('auth.app')

@section('content')

        <!--main content start here-->
<section class="content ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>&nbsp;</h1>
                <div id="forgot" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">

                            <div class="modal-body">
                                <form class="form-horizontal" id="myform" method="post" name="myform">
                                    {!! csrf_field() !!}

                                    <div style="margin-bottom: 25px" class="input-group"><span
                                                class="input-group-addon"><i
                                                    class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="login-username" type="text" class="form-control validate[required]"
                                               name="username" value="" placeholder="Enter E-mail Address">
                                    </div>
                                    <div style="margin-top:10px" class="form-group">
                                        <!-- Button -->

                                        <div class="col-sm-12 controls">
                                            <button class="hvr-bounce-to-right btn" type="submit"> Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainbox col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-4">
                    <div class="panel panel-info loginwrpbg" style=" border:none; box-shadow: 10px 10px 18px #acacac;
    height: 400px !important;
    padding: 50px;
    width: 450px !important;">


                        <!-- Modal -->


                        <div class="login-inner" style="background:none !important; padding:0px !important;">
                            <div style="padding:0px !important;" class="panel-body">
                                <form class="form-horizontal" id="myform" method="post" action="{{ url('/login') }}" name="myform">
                                    {!! csrf_field() !!}
                                    <div style="margin-bottom: 25px" class="input-group"><span
                                                class="input-group-addon"><i
                                                    class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" type="text" class="form-control validate[required]"
                                               name="email" value="" placeholder="username or email" required>
                                    </div>
                                    <div style="margin-bottom:10px" class="input-group"><span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password"
                                               class="form-control validate[required]" name="password"
                                               placeholder="Password" required>
                                    </div>
                                    <div class="input-group">
                                        <div class="checkbox">
                                            <label>
                                                <input id="login-remember" type="checkbox" name="remember" value="1">
                                                Remember me </label>
                                        </div>
                                    </div>
                                    <div style="margin-top:10px" class="form-group">
                                        <!-- Button -->

                                        <div class="col-sm-12 controls">
                                            <button class="hvr-bounce-to-right btn" type="submit"> Login</button>
                                            <div class="clearfix"></div>
                                            <hr>
                                            <h4>Or Login with:</h4>
                                            <div class="facebook-btn">
                                                <ul>
                                                    <li class="facebook hvr-bounce-to-right"><a
                                                                href="{{ url('/social/auth/redirect', ['facebook']) }}"><span> Facebook </span></a>
                                                    </li>
                                                    <li><span>Or</span></li>
                                                    <li class="gmail hvr-bounce-to-right"><a
                                                                href="{{ url('/social/auth/redirect', ['google']) }}">
                                                            <span>G-mail</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 control">
                                            <div class="text-center"> Don't have an account! <a href="{{ url('/register') }}">
                                                    Sign Up Here </a></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--main content end here-->

@stop