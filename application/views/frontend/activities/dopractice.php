<?php
if($operator[0]=='*'){
    $ret = "/mathmooc/assets/img/mul.png";
}
if($operator[0]=='+'){
    $ret = "/mathmooc/assets/img/plus-sign.png";
}

?>
<?php echo link_tag('assets/css/exam.css', 'stylesheet', 'text/css'); ?>
<script type="text/javascript">
    var EXAM_TIME_LEFT = '<?php echo $activity->active * 1; ?>';
    var EXAM_REQUEST_ID = '<?php echo $activity->id; ?>';
</script>
<!-- For animation -->
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
                    <table cellspacing="20" cellpadding="10" style="width:100%;" >
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
                                                   <!--  <div id="navigation-area"></div> -->
                                                </div>
                                            </div>

                                           <!--  <div class="row">
                                                <div class="col-md-6 col-md-offset-3"><input type="submit" name="play" id="play" value="CLICK HERE TO START" class="btn btn-primary btn-lg"></div>
                                            </div> -->

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
                                                                         <p class="b"><img src=<?php echo $ret; ?> alt=""></p>
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
                                                                         <p class="b"><img src=<?php echo $ret; ?> alt=""></p>
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

