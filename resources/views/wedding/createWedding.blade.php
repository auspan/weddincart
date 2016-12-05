@extends('wedding.home')

@section('content')

        <!--main content start here-->
<section class="content ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 create-wedding">

                <form class=""  id="myform" method="post" name="myform">
                    {!! csrf_field() !!}

                    <h1>Create your event</h1>
                    <hr class="style2">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">Please fill-up the details of the Bride and Groom.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-xs-offset-5">
                            <div class="form-group text-center">
                                <label class="control-label">Wedding Date:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control validate[required]" aria-describedby="start-date" id="datetimepicker_mask" placeholder="dd/mm/yyyy">
                                    <span class="input-group-addon" id="start-date"><span class="glyphicon glyphicon-calendar"></span></span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"> </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input id="file-3" type="file" multiple=true>
                                <p> Upload Bride Photo(Minimum size 300 x 300 pixel.)</p>
                                <h2>Bride</h2>
                                <div class="form-group">
                                    <label for="name">Name *:</label>
                                    <input type="text" class="form-control " id="email">
                                </div>
                                <div class="form-group">
                                    <label for="comment">About:</label>
                                    <textarea class="form-control validate[required]" rows="5" id="comment"></textarea>
                                </div>
                                <label for="name">Social Media Links:</label>
                                <div class="form-group">
                                    <div class = "input-group"> <span class = "input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                        <input type = "text" class = "form-control " placeholder = "http://www.facebook.com/">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class = "input-group"> <span class = "input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                        <input type = "text" class = "form-control" placeholder = "http://www.twitter.com/">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class = "input-group"> <span class = "input-group-addon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                        <input type = "text" class = "form-control" placeholder = "http://www.instagram.com/">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input id="file-3a" type="file" multiple=true>
                                <p> Upload Groom Photo(Minimum size 300 x 300 pixel.)</p>
                                <h2>Groom</h2>
                                <div class="form-group">
                                    <label for="name">Name *:</label>
                                    <input type="text" class="form-control " id="email">
                                </div>
                                <div class="form-group">
                                    <label for="comment">About:</label>
                                    <textarea class="form-control " rows="5" id="comment"></textarea>
                                </div>
                                <label for="name">Social Media Links:</label>
                                <div class="form-group">
                                    <div class = "input-group"> <span class = "input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                        <input type = "text" class = "form-control" placeholder = "http://www.facebook.com/">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class = "input-group"> <span class = "input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                        <input type = "text" class = "form-control" placeholder = "http://www.twitter.com/">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class = "input-group"> <span class = "input-group-addon"><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                        <input type = "text" class = "form-control" placeholder = "http://www.instagram.com/">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"> </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="comment" class="text-center">Our Story:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="col-md-1"> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center ">
                            <div class="btn-center center-block">
                                <button class="hvr-bounce-to-right btn" type="submit"> Save </button>
                                <button class="hvr-bounce-to-right btn" type="submit"> Back </button>
                            </div>
                        </div>
                    </div>

                </form>






            </div>
        </div>
    </div>
</section>
<!--main content end here-->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $('#back-to-top').tooltip('show');
    });
</script>
<script>
    $(function(){
        $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                    $(this).toggleClass('open');
                    $('b', this).toggleClass("caret caret-up");
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                    $(this).toggleClass('open');
                    $('b', this).toggleClass("caret caret-up");
                });
    });

</script>

<!--<script src="datetimepicker-master/jquery.js"></script>
--><script src="datetimepicker-master/jquery.datetimepicker.js"></script>
<script>


    $('#datetimepicker10').datetimepicker({
        step:5,
        inline:true
    });
    $('#datetimepicker_mask').datetimepicker({

        format:'d/m/Y',

        timepicker:false

    });

</script>
<script>
    document.getElementById("start-date").onclick = function(e){
        document.getElementById("datetimepicker_mask").focus();
        // You could write code to toggle this
    }
</script>
<script>
    $('#datetimepicker_mask').datepicker().on('changeDate', function (ev) {

        $('#datetimepicker_mask').Close();

    });
</script>
<script>


    $("#file-3").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });

    $("#file-3a").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });

</script>


<script type="text/javascript" src="validations/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="validations/js/jquery.validationEngine-en.js"></script>
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

@stop