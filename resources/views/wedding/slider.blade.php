<div class="slider-wrp">
    <div class="overlay"></div>
    <div class="start-wrp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center"></div>
            </div>
        </div>
        <div class="listnone">
            <ul id="countdown_dashboard">
                <div class="start-head">
                    <h2>We are getting married !!</h2>
                    <h3>{{ $wedding_day_of_week }}, {{ $wedding_day_of_month }}
                        <sup>{{ $wedding_day_of_month_suffix }}</sup> {{ $wedding_month }} {{ $wedding_year }}. </h3>
                    <hr class="style15">
                    <h1>{{ $bnm }} & {{ $gnm }}</h1>
                    <hr class="style3">
                </div>
                <li class="inline pull-left"><img src="images/left-icon.png"></li>
                <li class="dash weeks_dash"><span class="dash_title">weeks</span>
                    <div class="digit">
                        <div style="display: none;" class="top">1</div>
                        <div style="display: block;" class="bottom">1</div>
                    </div>
                    <div class="digit">
                        <div style="display: none;" class="top">4</div>
                        <div style="display: block;" class="bottom">4</div>
                    </div>
                </li>
                <li class="dash days_dash"><span class="dash_title">days</span>
                    <div class="digit">
                        <div style="display: none;" class="top">0</div>
                        <div style="display: block;" class="bottom">0</div>
                    </div>
                    <div class="digit">
                        <div style="display: none;" class="top">5</div>
                        <div style="display: block;" class="bottom">5</div>
                    </div>
                </li>
                <li class="dash hours_dash"><span class="dash_title">hours</span>
                    <div class="digit">
                        <div style="display: none;" class="top">1</div>
                        <div style="display: block;" class="bottom">1</div>
                    </div>
                    <div class="digit">
                        <div style="display: none;" class="top">2</div>
                        <div style="display: block;" class="bottom">2</div>
                    </div>
                </li>
                <li class="dash minutes_dash"><span class="dash_title">min</span>
                    <div class="digit">
                        <div style="display: none;" class="top">3</div>
                        <div style="display: block;" class="bottom">3</div>
                    </div>
                    <div class="digit">
                        <div style="display: none;" class="top">4</div>
                        <div style="display: block;" class="bottom">4</div>
                    </div>
                </li>
                <li class="dash seconds_dash"><span class="dash_title">sec</span>
                    <div class="digit">
                        <div style="display: none;" class="top">2</div>
                        <div style="display: block;" class="bottom">2</div>
                    </div>
                    <div class="digit">
                        <div style="display: block; overflow: hidden; height: 1px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;"
                             class="top">8
                        </div>
                        <div style="display: block; overflow: hidden; height: 99px;" class="bottom">9</div>
                    </div>
                </li>
                <li class="inline pull-right ricon"><img src="images/right-icon.png"></li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</div>

<div id="header">
    <div><img src="images/sliders/slide1.jpg"></div>
    <div><img src="images/sliders/slide2.jpg"></div>
    <div><img src="images/sliders/slide3.jpg"></div>
    <div><img src="images/sliders/slide4.jpg"></div>
</div>

<script>
    $(document).ready(function () {

        $('#header').bxSlider({
            auto: true,
            minSlides: 1,
            maxSlides: 1,
            captions: true,
            slideMargin: 0
        });

        $('#countdown_dashboard').countDown({
            targetDate: {
                'day': 		14,
                'month': 	2,
                'year': 	2017,
                'hour': 	22,
                'min': 		0,
                'sec': 		0,
                'utc':    true
            },
        });


    });
</script>
<script src="js/counter.js"></script>