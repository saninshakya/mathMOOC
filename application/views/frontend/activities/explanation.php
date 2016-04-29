<?php
if ($explanations == NULL) {
    ?>
    <div class="topic-header"><h2 id="exam-name">Sorry NO Explanation Available</h2></div>
    <div class="row" style="height:400px; padding:50px 0;">
        <div class="col-md-6 col-md-offset-5"><input type="button" value="GO BACK" id="return" class="btn btn-primary" />          
        </div>
    </div>
    <script>
        $("#return").click(function () {
            window.location.href = 'http://localhost/mathMOOC/activities/dopractice/' + <?php echo($questions->activity_id); ?>
        });
    </script>

    <?php
} else {
    echo link_tag('assets/css/exam.css', 'stylesheet', 'text/css');
    ?>
    <!-- For animation -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.runloop.1.0.3.js" type="text/javascript"></script>

    <div id="service">
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <!-- OLD DATA -->
                        <table cellspacing="20" cellpadding="10" style="width:100%; min-height:600px;" >
                            <tr>
                                <td valign="top">
                                    <div class="row">
                                        <div id="explanation-ui" class="col-xs-12">
                                            <div class="exam_content_area">
                                                <div class="topic-header"><h2 id="exam-name">Explanation</h2></div>
                                                <div class="explanation_for_question">
                                                <?php
                                                    echo ($questions->question).'='.'?';
                                                ?>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-6 col-md-offset-3" style="margin-top:50px;"><input type="submit" name="play" id="play" value="CLICK HERE TO START EXPLANATION" class="btn btn-primary btn-lg"></div>
                                                </div>
                                                <?php

                                                    $explanation = $explanations[0];
                                                    $no = explode("+", $explanation->explanation);
                                                    $firstno = $no[0];
                                                    $secondno = $no[1];
                                                    $description = $explanation->description;
                                                    $conclusion = $explanation->conclusion;
                                                ?>
                                                    <div class="main-part">
                                                        <div class="row">
                                                            <div class="col-md-8" id="exp-counter"><?php //echo('Explanation: ' . $counter); ?></div>
                                                        </div>
                                                        <!-- <div class="row">
                                                            <div class="col-md-8" id="description" style="margin-top:10px; font-size:16px;"><?php echo($description); ?></div>
                                                        </div> -->
                                                        <fieldset id="exam-question">
                                                            <div id="question-text"></div>
                                                            <div class="bigWrapper">
                                                                <div class="problem">
                                                                    <div class="fleft part1wrapper">
                                                                        <div class="part1 tableBased">
                                                                            <div class="imgHolder-img1">
                                                                                <?php for ($i = 1; $i <= $firstno; $i++) { ?>
                                                                                    <p class="a<?php echo $i; ?>">
                                                                                        <span><?php echo $i; ?></span>
                                                                                        <img src="<?php echo("/mathmooc/" . $questions->image); ?>">
                                                                                    </p>
                                                                                <?php } ?>
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
                                                                                <?php for ($j = 1; $j <= $secondno; $j++) { ?>
                                                                                    <p class="c<?php echo $j; ?>">
                                                                                        <span><?php echo $i - 1 + $j; ?></span>
                                                                                        <img src="<?php echo("/mathmooc/" . $questions->image1); ?>">
                                                                                    <?php } ?>
                                                                                </p>
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
                                                                    <div class="fleft part2wrapper">
                                                                        <div class="part2 tableBased">
                                                                            <div class="imgHolder-img2">
                                                                                <?php for ($i = 1; $i <= ($firstno + $secondno); $i++) { ?>
                                                                                    <p class="e<?php echo $i; ?>">
                                                                                        <span><?php //echo $i; ?></span>
                                                                                        <img src="<?php echo("/mathmooc/" . $questions->image1); ?>">
                                                                                    </p>
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="solutions">
                                                                    <div class="solutionbox fleft">
                                                                        <div class="sol solution-one">
                                                                            <big>
                                                                                <div class="digit1"><p class="a"><?php echo($firstno); ?></p></div>
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
                                                                                <div class="digit2"><p class="c"><?php echo($secondno); ?></p></div>
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
                                                                            <big>
                                                                                <p class="e"><?php echo($firstno + $secondno); ?></p>
                                                                            </big>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6" id="description" style="margin-top:10px; font-size:16px;"><?php echo($conclusion); ?></div>
                                                                </div>
                                                            </div>
                                                        </fieldset>

                                                        <input id="question-id" name="question_id" value="" type="hidden" />
                                                    </div><!--end main-part div -->
                                                </div>
                                        
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-5">
                                                    <div id="return-question"><input type="button" value="GO BACK" id="return" class="btn btn-primary" /></div>
                                                    <!-- <div id="next"><input type="button" value="NEXT" id="next" class="btn btn-primary" /></div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- For animation -->
    <script>
        $(document).ready(function () {
            $('.c3').addClass('active');
            $("#return").hide();
            $("#next").hide();
            $(".main-part").hide();
            $('#description').hide();

            $("#play").click(function () {
                myRunloop.play(2000, optionalCallback);
                $("#play").hide();
                $("#return").show();
                $(".main-part").show();
                $('#description').fadeIn(4500);
            });
            $("#return").click(function () {
                window.location.href = 'http://localhost/mathMOOC/activities/dopractice/' + <?php echo($questions->activity_id); ?>
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

            for (var x = 1; x <=<?php echo $firstno; ?>; x++) { 
                $("p.a"+x).css({
                   float: 'left'
                });
            }

            for (var x = 1; x <=<?php echo $secondno; ?>; x++) { 
                $("p.c"+x).css({
                   float: 'left'
                });
            }

             for (var x = 1; x <=<?php echo $secondno; ?>; x++) { 
                $("p.e"+x).css({
                   float: 'left'
                });
            }

            // Make a new runloop. Probably best not to attach it to the window object, but it's useful for this demo
            // as it allows you to inspect the myRunloop object using Firebug/Web Inspector.
            window.myRunloop = jQuery.runloop();

            // You add keyframes with addKey(); the first parameter is the percentage into the overall runloop duration,
            // the second is the function to execute at that keyframe point.
            myRunloop.addKey('10%', function () {
                $("#box").animate({width: '35.6em', paddingLeft: '2em', paddingRight: '2em'}, {duration: 1000, queue: false})
            });

            var delay = 1000;
            var delayinc = 1000;
                myRunloop.addKey('20%', function () {
                     for (var z = 1; z <=<?php echo $firstno; ?>; z++) { 
                    // console.log("hello", z);
                    $("p.a"+z).delay(delay).animate({opacity: 1, left: 0}, {duration: 500})
                    delay += delayinc;
                    }
                    $("p.a").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                    delay += delayinc;
                    $("p.b").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                    delay += delayinc;
                });

                myRunloop.addKey('20%', function () {
                     for (var z = 1; z <=<?php echo $secondno; ?>; z++) { 
                    // console.log("hello", z);
                    $("p.c"+z).delay(delay).animate({opacity: 1, left: 0}, {duration: 500})
                    delay += delayinc;
                    }
                    $("p.c").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                    delay += delayinc;
                    $("p.d").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                    delay += delayinc;
                });

                myRunloop.addKey('20%', function () {
                     for (var z = 1; z <=<?php echo $firstno+$secondno; ?>; z++) { 
                    // console.log("hello", z);
                    $("p.e"+z).delay(delay).animate({opacity: 1, left: 0}, {duration: 500})
                    delay += delayinc;
                    }
                    $("p.e").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                    delay += delayinc;
                });
                
 

            // But you don't have to do individual addKey() calls; use addMap() to add multiple keyframes at once:
            // myRunloop.addMap({
            //     '10%': function () {
            //         $("p.a").delay(1000).animate({opacity: 1, left: 0}, {duration: 500, easing: 'easeOutElastic',
            //             complete: function () {

            //             }
            //         });
            //     },
            //     '65%': function () {
            //         $("p.b").animate({opacity: 1, left: 0}, {duration: 500, queue: false});
            //     },
            //     '75%': function () {
            //         $("p.c").animate({opacity: 1, left: 0}, {duration: 500, queue: false});
            //     },
            //     '85%': function () {
            //         $("p.d").animate({opacity: 1, left: 0}, {duration: 500, queue: false});
            //     },
            //     '95%': function () {
            //         $("p.e").animate({opacity: 1, left: 0}, {duration: 500, queue: false});
            //     }
            //     '100%': function(){ $("p.copyright").animate( { opacity:1, left:0 }, { duration:650, queue:false } ); }
            // });

            // You can add a callback to the end of the runloop, but note: it's the same as this: addKey('100%', func);
            function optionalCallback() {
            };

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
    <?php
}
?>