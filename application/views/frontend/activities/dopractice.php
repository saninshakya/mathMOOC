<?php echo link_tag('assets/css/exam.css', 'stylesheet', 'text/css'); ?>
<script type="text/javascript">
    var EXAM_TIME_LEFT = '<?php echo $activity->active * 1; ?>';
    var EXAM_REQUEST_ID = '<?php echo $activity->id; ?>';
</script>
<!-- For animation -->
<script src="<?php echo base_url(); ?>assets/js/jquery.runloop.1.0.3.js" type="text/javascript"></script>
<!-- For controlling activities -->
<script src="<?php echo base_url(); ?>assets/js/activity.js" type="text/javascript"></script>
<!-- For converting number to word -->
<script src="<?php echo base_url(); ?>assets/js/toword.js" type="text/javascript"></script>
<!--For alerting the results -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert-dev.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sweetalert.css"/>

<div id="service">
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">

                    <!-- OLD DATA -->
                    <table cellspacing="20" cellpadding="10" >
                        <tr>
                            <td>
                                <div id="loading"><h1  style="font-size:1.2em">Please wait while your exam is being loaded...</h1></div>
                                <div id="submitting" style="display: none;"><h1 style="font-size:1.2em">Please wait while your exam results are being submitted...</h1></div>
                                <div id="error-message" style="display: none;"><h1>An error occured</h1><p id="error-text"></p></div>
                                <div class="row">
                                    <div id="exam-ui" class="col-xs-12">
                                        <div class="exam_content_area">
                                            <div class="topic-header"><h2 id="exam-name"></h2></div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-8">
                                                    <form id="exam-timer">
                                                        <h2> TIMER </h2>
                                                        <input value="" readonly="readonly" name="time_left" id="exam-time-left" />
                                                    </form>
                                                </div>

                                                <div class="col-xs-6 col-md-4" style="text-align:right">
                                                    <h2> Question  <span id="question-index"></span> / <span id="question-count"></span></h2>
                                                    <!-- <p><b>Navigation of questions:</b></p> -->
                                                    <div id="navigation-area"></div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-3"><input type="submit" name="play" id="play" value="CLICK HERE TO START" class="btn btn-primary btn-lg"></div>
                                            </div>

                                            <form>
                                                <fieldset id="exam-question">
                                                    <div id="question-text"></div>
                                                    <div class="bigWrapper">
                                                        <div class="problem">
                                                            <div class="fleft part1wrapper">
                                                                <div class="part1 tableBased">
                                                                    <div class="imgHolder-img1">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="plussign fleft">
                                                                <div class="tableBased">
                                                                    <div class="imgHolder tableCelled">
                                                                         <p class="b"><img src="/mathmooc/assets/img/plus-sign.png" alt=""></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="fleft part2wrapper">
                                                                <div class="part2 tableBased">
                                                                    <div class="imgHolder-img2">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="equalto fleft">
                                                                <div class="tableBased">
                                                                    <div class="imgHolder tableCelled">
                                                                        <p class="d"><img src="/mathmooc/assets/img/equal-to.png" alt=""></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="equalto fleft">
                                                                <div class="tableBased">
                                                                    <div class="imgHolder tableCelled">
                                                                        <p class="e"><img src="/mathmooc/assets/img/question-mark.png" alt="star"/></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="solutions">
                                                            <div class="solutionbox fleft">
                                                                <div class="sol solution-one">
                                                                    <big>
                                                                        <div class="digit1"><p class="a"></p></div>
                                                                    </big>
                                                                </div>
                                                            </div>
                                                            <div class="plussign fleft">
                                                                <div class="tableBased">
                                                                    <div class="imgHolder tableCelled">
                                                                         <p class="b"><img src="/mathmooc/assets/img/plus-sign.png" alt=""></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="solutionbox fleft">
                                                                <div class="sol solution-two">
                                                                    <big>
                                                                        <div class="digit2"><p class="c"></p></div>
                                                                    </big>
                                                                </div>
                                                            </div>
                                                            <div class="equalto fleft">
                                                                <div class="tableBased">
                                                                    <div class="imgHolder tableCelled">
                                                                        <p class="d"><img src="/mathmooc/assets/img/equal-to.png" alt=""></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="equalto fleft">
                                                                <div class="tableBased">
                                                                    <div class="imgHolder tableCelled">
                                                                        <p class="e"><img src="/mathmooc/assets/img/question-mark.png" alt="star"/></p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="answers-option btn-group btn-group-vertical" data-toggle="buttons">
                                                        <h2>Please choose your Answer</h2>
                                                        <ul id="answers" class="unstyled" />
                                                    </div>

                                                </fieldset>
                                                <br>
                                                <table class="no-border">
                                                    <tbody>
                                                        <tr>
                                                            <td id="submit-answer"><input type="button" value="Submit" id="record-answer-button" class="btn btn-primary" /></td>                  
                                                            <td style="padding-left: 145px;"><input type="button" value="Skip Question" id="skip-button" class="btn btn-warning"/></td>
                                                            <td style="padding-left: 22px;" id="complete-exam"><input type="button" value="Finish Exam" id="finish-exam-button" class="btn btn-info"/></td>
                                                            <td style="padding-left: 22px;" id="explanation"><input type="button" value="Explanation" id="explanation-button" class="btn btn-success"/></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                            <input id="question-id" name="question_id" value="" type="hidden" />
                                        </div>
                                    </div>

                                </div>
                        </tr>
                    </table> 
                </div></div>

        </div></div>
</div>

<!-- For animation -->
<script>
    $(document).ready(function () {
        $('.c3').addClass('active');
        $('#explanation').click(function(){
           window.location.href='http://localhost/mathMOOC/worksheets';
        });
        $(".answers-option").hide(); // hide the answer list
        $("#record-answer-button").hide();
        $("#skip-button").hide();
        $("#finish-exam-button").hide();
        $("#explanation-button").hide();
        $("#play").click(function () {
            myRunloop.play(2000, optionalCallback);
            $("#play").hide();
            $("#return").show();
            $(".answers-option").toggle();
            $("#record-answer-button").toggle();
            $("#skip-button").toggle();
            $("#finish-exam-button").toggle();
            $("#explanation-button").toggle();
        });
        $("#return").click(function(){
            window.location.href='http://localhost/mathMOOC/activities/dopractice/11';
        });

        // JavaScript enabled; initiate some of the CSS for this
        $("#intro h1").css({
            bottom: '-1.5em',
            opacity: 1
        });
        $("#box").css({
            background: '#22346F',
            'border-color': '#333',
            height: 0,
            width: 0
        });
        $("p").css({
            opacity: 0,
            position: 'relative',
            left: '-3em'
        });
        $("p.b, p.copyright").css({
            left: '3em'
        });


        // Make a new runloop. Probably best not to attach it to the window object, but it's useful for this demo
        // as it allows you to inspect the myRunloop object using Firebug/Web Inspector.
        window.myRunloop = jQuery.runloop();

        // You add keyframes with addKey(); the first parameter is the percentage into the overall runloop duration,
        // the second is the function to execute at that keyframe point.
        myRunloop.addKey('10%', function () {
            $("#box").animate({width: '35.6em', paddingLeft: '2em', paddingRight: '2em'}, {duration: 1000, queue: false})
        });

        // But you don't have to do individual addKey() calls; use addMap() to add multiple keyframes at once:
        myRunloop.addMap({
            '55%': function () {
                $("p.a").animate({opacity: 1, left: 0}, {duration: 500, queue: false});
            },
            '65%': function () {
                $("p.b").animate({opacity: 1, left: 0}, {duration: 500, queue: false});
            },
            '75%': function () {
                $("p.c").animate({opacity: 1, left: 0}, {duration: 500, queue: false});
            },
            '85%': function () {
                $("p.d").animate({opacity: 1, left: 0}, {duration: 500, queue: false});
            },
            '95%': function () {
                $("p.e").animate({opacity: 1, left: 0}, {duration: 500, queue: false});
            }
            // '100%': function(){ $("p.copyright").animate( { opacity:1, left:0 }, { duration:650, queue:false } ); }
        });

        // You can add a callback to the end of the runloop, but note: it's the same as this: addKey('100%', func);
        function optionalCallback() {
        }
        ;

        // Start playing the runloop, in this case with a duration of 10s.
        // If the duration is omitted and no runloop was playing, it'll default to 500ms.
        // myRunloop.play(10000, optionalCallback);
        function randomNumber(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }
        ;
        $('#captchaOperation').html([randomNumber(1, 5), '+', randomNumber(1, 5), '='].join(' '));
        $('#captchaOperation1').html([randomNumber(1, 5), '+', randomNumber(1, 5), '='].join(' '));
        $('#captchaOperation2').html([randomNumber(1, 5), '+', randomNumber(1, 5), '='].join(' '));
        $('#captchaOperation3').html([randomNumber(1, 5), '+', randomNumber(1, 5), '='].join(' '));
        $('#captchaOperation4').html([randomNumber(1, 5), '+', randomNumber(1, 5), '='].join(' '));
        $('#captchaOperation5').html([randomNumber(1, 5), '+', randomNumber(1, 5), '='].join(' '));

        $('#defaultForm').formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                captcha: {
                    validators: {
                        callback: {
                            message: 'Wrong answer',
                            callback: function (value, validator, $field) {
                                var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                },
                captcha1: {
                    validators: {
                        callback: {
                            message: 'Wrong answer',
                            callback: function (value, validator, $field) {
                                var items = $('#captchaOperation1').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                },
                captcha2: {
                    validators: {
                        callback: {
                            message: 'Wrong answer',
                            callback: function (value, validator, $field) {
                                var items = $('#captchaOperation2').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                },
                captcha3: {
                    validators: {
                        callback: {
                            message: 'Wrong answer',
                            callback: function (value, validator, $field) {
                                var items = $('#captchaOperation3').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                },
                captcha4: {
                    validators: {
                        callback: {
                            message: 'Wrong answer',
                            callback: function (value, validator, $field) {
                                var items = $('#captchaOperation4').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                },
                captcha5: {
                    validators: {
                        callback: {
                            message: 'Wrong answer',
                            callback: function (value, validator, $field) {
                                var items = $('#captchaOperation5').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                },
            }
        });
    });

    var _gaq = [['_setAccount', 'UA-3764464-3'], ['_setDomainName', '.farukat.es'], ['_trackPageview']];
    (function (d, t) {
        var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
        g.async = true;
        g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s);
    })(document, 'script');


</script> 
<!-- end animation-->