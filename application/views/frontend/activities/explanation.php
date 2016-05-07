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
                        <table cellspacing="20" cellpadding="10" style="width:100%; min-height:600px;" >
                            <tr>
                                <td valign="top">
                                    <div class="row">
                                        <div id="explanation-ui" class="col-xs-12">
                                            <div class="exam_content_area">
                                                <div class="topic-header"><h2 id="exam-name">Counting Based Explanation</h2></div>
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
                                                        <fieldset id="exam-question">
                                                            <div id="question-text"></div>
                                                            <div class="bigWrapper">
                                                                <div class="problem">
                                                                    <div class="fleft part1wrapper">
                                                                        <div class="part1 tableBased">
                                                                            <div class="imgHolder-img1">
                                                                                <?php for ($i = 1; $i <= $firstno; $i++) { ?>
                                                                                <div class="holder">
                                                                                    <p class="a<?php echo $i; ?>">
                                                                                        <img src="<?php echo("/mathmooc/" . $questions->image); ?>">
                                                                                    </p>
                                                                                </div>
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
                                                                                    <div class="holder">
                                                                                        <p class="c<?php echo $j; ?>">
                                                                                            <img src="<?php echo("/mathmooc/" . $questions->image1); ?>">
                                                                                        </p>
                                                                                    </div>
                                                                                    <?php } ?>
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
                                                                                <div class="holder">
                                                                                    <p class="e<?php echo $i; ?>">
                                                                                        <img src="<?php echo("/mathmooc/" . $questions->image1); ?>">
                                                                                    </p>
                                                                                    <p class="count<?php echo $i; ?>"><?php echo $i; ?></p>
                                                                                </div>
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

                                                        <input id="question-id" name="question_id" value="" type="hidden" />
                                                    </div><!--end main-part div -->
                                                </div>
                                        
                                            <div class="row">
                                                <div class="col-md-6 col-md-offset-5">
                                                    <div id="return-question"><input type="button" value="GO BACK" id="return" class="btn btn-primary" /></div>
                                                    <?php
                                                        if (isset($explanations[1])){
                                                    ?>
                                                    <div id="next"><input type="button" value="NEXT" id="next" class="btn btn-primary" /></div>
                                                    <?php
                                                    }
                                                    ?>
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

            $("#play").click(function () {
                myRunloop.play(2000, optionalCallback);
                $("#play").hide();
                $("#return").show();
                $("#next").show();
                $(".main-part").show();
            });

            $("#next").click(function () {
                window.location.href = 'http://localhost/mathMOOC/activities/nextexplanation/' + <?php echo($questions->id); ?>
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

            for (var x = 1; x <=<?php echo $firstno+$secondno; ?>; x++) { 
                $("p.count"+x).css({
                    'font-size': '15px',
                    'font-weight': 'bold',
                    'left' : '0px'
                });
            }

            // Make a new runloop. Probably best not to attach it to the window object, but it's useful for this demo
            // as it allows you to inspect the myRunloop object using Firebug/Web Inspector.
            window.myRunloop = jQuery.runloop();

            // You add keyframes with addKey(); the first parameter is the percentage into the overall runloop duration,
            // the second is the function to execute at that keyframe point.
            var delay = 1000;
            var delayinc = 1000;
            myRunloop.addKey('10%', function () {
                for (var z = 1; z <=<?php echo $firstno; ?>; z++) { 
                // console.log("hello", z);
                $("p.a"+z).delay(delay).animate({opacity: 1, left: 0}, {duration: 500})
                delay += delayinc;
                }
                $("p.a").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                delay += delayinc;
                $("p.b").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                delay += delayinc;
                for (var z = 1; z <=<?php echo $secondno; ?>; z++) { 
                $("p.c"+z).delay(delay).animate({opacity: 1, left: 0}, {duration: 500})
                delay += delayinc;
                }
                $("p.c").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                delay += delayinc;
                $("p.d").delay(delay).animate({opacity: 1, left: 0}, {duration: 500});
                delay += delayinc;
                for (var z = 1; z <=<?php echo $firstno; ?>; z++) { 
                    var current = $("p.a"+z);
                    var prependToDiv = $("p.e"+z);
                    var aOffset = current.offset();
                    var eOffset = prependToDiv.offset();
                    var newOffset = eOffset.left-aOffset.left;

                    current.delay(delay).animate({
                        top: 0,
                        left: newOffset     
                    }, {duration: 800}, function() {
                    current.prependTo(prependToDiv).css({
                        top: 'auto',
                        left: 'auto'
                    }); 
                    })
                    delay += delayinc;
                }
                
                for (var z = 1; z <=<?php echo ($secondno); ?>; z++) { 
                    var index = z+<?php echo $firstno; ?>;
                    var current = $("p.c"+z);
                    var prependToDiv = $("p.e"+index);
                    var cOffset = current.offset();
                    var eOffset = prependToDiv.offset();
                    var newOffset = eOffset.left-cOffset.left;
                    current.delay(delay).animate({
                        top: 0,
                        left: newOffset     
                    }, {duration: 800}, function() {
                    current.prependTo(prependToDiv).css({
                        top: 'auto',
                        left: 'auto'
                    }); 
                    })
                    delay += delayinc;
                }
                
                delay += <?php echo ($firstno+$secondno)*1500; ?>;
                for (var z = 1; z <=<?php echo ($firstno+$secondno); ?>; z++) { 
                    $("p.count"+z).delay(delay).animate({opacity: 1, top: '+=10px'}, {duration: 2500}, "linear")
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