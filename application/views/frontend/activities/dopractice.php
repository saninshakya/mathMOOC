<?php echo link_tag('assets/css/exam.css', 'stylesheet', 'text/css'); ?>
<script type="text/javascript">
    var EXAM_TIME_LEFT = '<?php echo $activity->active * 1; ?>';
    var EXAM_REQUEST_ID = '<?php echo $activity->id; ?>';
</script>
<script src="<?php echo base_url(); ?>assets/js/activity.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/toword.js" type="text/javascript"></script>
<div id="service">
    <div class="container middlecontent">
        <div class="row">

            <div class="panel panel-default" style="background:#f2f8fb;min-height: 500px;">
                <div class="panel-body">
                    <!-- OLD DATA -->
                    <table cellspacing="20" cellpadding="10" style="width:100%">
                        <tr>
                            <td>
                                <div id="loading"><h1  style="font-size:1.2em">Please wait while your exam is being loaded...</h1></div>
                                <div id="submitting" style="display: none;"><h1 style="font-size:1.2em">Please wait while your exam results are being submitted...</h1></div>
                                <div id="error-message" style="display: none;"><h1>An error occured</h1><p id="error-text"></p></div>
                                <div class="row">
                                    <div id="exam-ui" class=" col-lg-9">
                                        <div class="exam_content_area">
                                            <h2 id="exam-name"></h2>
                                            <h4> Question  <span id="question-index"></span> / <span id="question-count"></span></h4>
                                            <br>
                                            <form>
                                                <fieldset id="exam-question">
                                                    <div id="question-text" style="margin-bottom:10px; "></div>
                                                    <div id="question-image"></div>
                                                    <div class="clear_both_body"></div>
                                                    <div id ="second-question-image"></div>
                                                    <div class="clear_both_body"></div>
                                                    <div>
                                                        <div class="btn-group btn-group-vertical" data-toggle="buttons">
                                                            <ul id="answers" class="unstyled" />
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <br>
                                                <table class="no-border">
                                                    <tbody>
                                                        <tr>
                                                            <td id="submit-answer"><input type="button" value="Record Answer" id="record-answer-button" class="btn btn-primary" /></td>                  
                                                            <td style="padding-left: 145px;"><input type="button" value="Skip Question" id="skip-button" class="btn"/></td>
                                                            <td style="padding-left: 22px;" id="complete-exam"><input type="button" value="Finish Exam" id="finish-exam-button" class="btn"/></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </form>
                                            <input id="question-id" name="question_id" value="" type="hidden" />
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div>
                                            <b>Time left:</b>
                                            <form id="exam-timer">
                                                <input value="" readonly="readonly" name="time_left" id="exam-time-left" />
                                            </form>
                                        </div>
                                        <div>
                                            <p><b>Navigation of questions:</b></p>
                                            <div id="navigation-area">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </tr>
                    </table> 
                </div></div>
        </div></div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.c3').addClass('active');
    });
</script>