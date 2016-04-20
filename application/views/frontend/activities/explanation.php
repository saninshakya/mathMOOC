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
                        <table cellspacing="20" cellpadding="10" >
                            <tr>
                                <td>
                                    <div class="row">
                                        <div id="explanation-ui" class="col-xs-12">
                                            <div class="exam_content_area">
                                                <div class="topic-header"><h2 id="exam-name">Explanation</h2></div>

                                                <div class="row">
                                                    <div class="col-md-6 col-md-offset-3" style="margin-top:50px;"><input type="submit" name="play" id="play" value="CLICK HERE TO START" class="btn btn-primary btn-lg"></div>
                                                </div>
                                                <?php
                                                foreach ($explanations as $explanation) {
                                                    $no = explode("+", $explanation->explanation);
                                                    $firstno = $no[0];
                                                    $secondno = $no[1];
                                                    ?>
                                                    <fieldset id="exam-question">
                                                        <div id="question-text"></div>
                                                        <div class="bigWrapper">
                                                            <div class="problem">
                                                                <div class="fleft part1wrapper">
                                                                    <div class="part1 tableBased">
                                                                        <div class="imgHolder-img1">
                                                                            <?php for ($i = 1; $i <= $firstno; $i++) { ?>
                                                                                <p class="a">                            
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
                                                                            <?php for ($i = 1; $i <= $secondno; $i++) { ?>
                                                                                <p class="c"><img src="<?php echo("/mathmooc/" . $questions->image1); ?>">
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
                                                                                <p class="e"><img src="<?php echo("/mathmooc/" . $questions->image1); ?>"></p>
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
                                                        </div>
                                                    </fieldset>

                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-6 col-md-offset-5">
                                                            <div id="return-question"><input type="button" value="GO BACK" id="return" class="btn btn-primary" /></div>
                                                            <div id="next"><input type="button" value="NEXT" id="next" class="btn btn-primary" /></div>
                                                        </div>
                                                    </div>

                                                    </table>
                                                    <input id="question-id" name="question_id" value="" type="hidden" />
                                                </div>
                                            <?php } ?>
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
            $("#return").hide();
            $("#next").hide();

            $("#play").click(function () {
                myRunloop.play(2000, optionalCallback);
                $("#play").hide();
                $("#return").show();
                $("#next").show();
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