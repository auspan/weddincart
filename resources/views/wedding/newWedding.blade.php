@extends('wedding.home')

@section('content')

        <!--main content start here-->
<section class="content ">
    <div class="container  white-tranbg">
        <div class="row">
            <div class="col-md-12">
                <h1>Wedding</h1>
                <hr class="style2">
                <p>Lorem ipsum dolor sit onsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
                <div class="afterlogin "> <a href="{{ url('/weddingForm') }}">
                        <button class="center-block hvr-bounce-to-right">Plan</button>
                    </a> </div>
            </div>
        </div>
    </div>
</section>
<!--main content end here-->

@stop