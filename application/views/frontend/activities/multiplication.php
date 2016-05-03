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
                                                <!-- <div class="explanation_for_question">
                                                <?php
                                                    echo ($questions->question).'='.'?';
                                                ?>
                                                </div> -->
                                                
                                                <div class="row">
                                                    <div class="col-md-6 col-md-offset-3" style="margin-top:50px;"><input type="submit" name="play" id="play" value="CLICK HERE TO START EXPLANATION" class="btn btn-primary btn-lg"></div>
                                                </div>
                                                <?php
                                                    $explanation = $explanations[0]; 
                                                    $no = explode("+", $explanation->explanation);
                                                    $count = count($no);
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
                                                                <?php
                                                                    $sum = 0;
                                                                    foreach($no as $key =>$value) {
                                                                        $sum = $sum + $value;
                                                                        // echo $key.' '.$value .'</br>'; return;
                                                                ?>
                                                                    <div class="fleft part<?php echo($key+1); ?>wrapper">
                                                                        <div class="part<?php echo($key+1); ?> tableBased">
                                                                            <div class="imgHolder-img<?php echo($key+1); ?>">
                                                                                
                                                                                <div class="holder">
                                                                                    <p class="<?php echo $key; ?>">
                                                                                    <?php for ($i = 1; $i <= $value; $i++) { ?>
                                                                                        <img src="<?php echo("/mathmooc/" . $questions->image); ?>">
                                                                                    <?php } ?>
                                                                                    </p>
                                                                                    <!-- <p class="count<?php echo $i; ?>"><?php echo $i; ?></p> -->
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                                                                    // echo(next($no));
                                                                    // return;
                                                                    if (isset($no[$key+1])!=null) {
                                                                        ?>
                                                                        <div class="plussign fleft">
                                                                            <div class="tableBased">
                                                                                <div class="imgHolder tableCelled">
                                                                                    <p class="b"><img src="/mathmooc/assets/img/plus-sign.png" alt=""></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php

                                                                    } else { ?>
                                                                        <div class="equalto fleft">
                                                                            <div class="tableBased">
                                                                                <div class="imgHolder tableCelled">
                                                                                    <p class="d"><img src="/mathmooc/assets/img/equal-to.png" alt=""></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                        }
                                                                    }
                                                                ?>
                                                                    <div class="fleft part2wrapper">
                                                                        <div class="part2 tableBased">
                                                                            <div class="imgHolder-img2">
                                                                                <div class="holder">
                                                                                    <p class="e">
                                                                                        <?php for ($i = 1; $i <= ($sum); $i++) { ?>
                                                                                        <img src="<?php echo("/mathmooc/" . $questions->image1); ?>">
                                                                                         <?php } ?>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="solutions">
                                                                    <?php
                                                                     foreach($no as $key =>$value) {

                                                                    ?>
                                                                    <div class="solutionbox fleft">
                                                                        <div class="sol solution-one">
                                                                            <big>
                                                                                <div class="digit<?php echo($key+1); ?>"><p class="<?php echo $key; ?>"><?php echo($value); ?></p></div>
                                                                            </big>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                    // echo(next($no));
                                                                    // return;
                                                                    if (isset($no[$key+1])!=null) {
                                                                        ?>
                                                                    <div class="plussign fleft">
                                                                        <div class="tableBased">
                                                                            <div class="imgHolder tableCelled">
                                                                                <p class="b"><img src="/mathmooc/assets/img/plus-sign.png" alt=""></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <?php
                                                                        }else{ ?>
                                                                            <div class="equalto fleft">
                                                                                <div class="tableBased">
                                                                                    <div class="imgHolder tableCelled">
                                                                                        <p class="d"><img src="/mathmooc/assets/img/equal-to.png" alt=""></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                       <?php }

                                                                    }
                                                                    ?>
                                                                    <div class="equalto fleft">
                                                                        <div class="tableBased">
                                                                            <big>
                                                                                <p class="e"><?php echo($sum); ?></p>
                                                                            </big>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               <!--  <div class="row">
                                                                    <div class="col-md-6" id="description" style="margin-top:10px; font-size:16px;"><?php echo($conclusion); ?></div>
                                                                </div> -->
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
            // $('#description').hide();

            $("#play").click(function () {
                myRunloop.play(2000, optionalCallback);
                $("#play").hide();
                $("#return").show();
                $("#next").show();
                $(".main-part").show();
                // $('#description').fadeIn(4500);
            });

            $("#next").click(function () {
                myRunloop.play(2000, optionalCallback);
                $("#return").show();
                $("#next").hide();
                // $('#description').fadeIn(4500);
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
         
            for (var x = 1; x <=<?php echo $count; ?>; x++) { 
               $(".part"+x).css({
                    'border': '1px solid #FF9A55'
                });
                $(".imgHolder-img"+x).css({
                    'padding': '10px'
                });
                $(".imgHolder-img"+x+" img").css({
                    'width': '35px',
                    // 'float': 'left'
                });
            }


            for (var x = 1; x <=<?php echo $sum; ?>; x++) { 
                $("p.count"+x).css({
                    'font-size': '15px',
                    'font-weight': 'bold'
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
                $("p.b").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                $("p.d").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                delay += delayinc;   
                for (var z = 0; z <=<?php echo $count-1; ?>; z++) { 
                    $("p."+z).delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                    delay += delayinc; 
                }  
                $("p.e").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});            
            });


                
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