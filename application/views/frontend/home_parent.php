<script type="text/javascript">
    $(function () {
<?php
$groupId = $this->ion_auth->get_users_groups()->row()->id;
if ($groupId = '3') {
    echo '$(".c1").hide(); $(".c2").hide(); $(".c3").hide(); $(".c10").hide(); $(".c6").hide();';
}
?>
    });
</script>
<div id="service">
    <div class="container middlecontent">
        <div class="row">
            <div class="col-xs-12"><div class="topic-header"><h2>Parent Panel</h2></div></div>
        </div>
        <h4 class="page-header">List of Activities</h4>
        <div class="row">
            <?php
            if ($useractivities) {
                foreach ($useractivities as $useractivity) {
                    $questions = ActivitiesQuestion::find_all_by_activity_id($useractivity->activity->id, array('include' => array('activities_answer')));
                    $exam_marks = 0;
                    $user_marks = 0;
                    if ($questions) {
                        foreach ($questions as $question) {
                            $exam_marks += $question->marks;
                            $correct_answers = array();
                            foreach ($question->activities_answer as $answer) {
                                if ($answer->correct == 1) {
                                    array_push($correct_answers, $answer->id);
                                }
                            }
                            $useranswer = UserActivitiesQuestion::find_by_user_id_and_question_id($useractivity->user_id, $question->id);
                            if (!empty($useranswer)) {
                                if ($useranswer->answer == 1) {
                                    $user_marks += $question->marks;
                                }
                            }
                        }
                    }
                    $perfomance = ($exam_marks != 0) ? ($user_marks / $exam_marks) * 100 : 0;
                    $perfomance = $perfomance . '%';
                    ?>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title"><?php echo $useractivity->activity->activity_name; ?></h4>
                            </div>

                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <label>Your Score  <?php //echo $perfomance;    ?></label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: <?php echo $perfomance; ?>;">
                                                <span class="sr-only"><?php echo $perfomance; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <label>Pass Mark <?php echo (2 / 3) * $exam_marks; ?>%</label>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: <?php echo (2 / 3) * $exam_marks; ?>%;">
                                                <span class="sr-only"><?php echo (2 / 3) * $exam_marks; ?>%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/row -->

                                <div class="row">
                                    <div class="col-lg-4"><p><a class="btn btn-warning" href="<?php echo site_url('activities/viewresults/' . $useractivity->activity->id); ?>">View Results</a></p></div>
                                    <div class="col-lg-4"><p><a class="btn btn-info" target="_blank"  href="<?php echo site_url('activities/certificate/' . $useractivity->activity->id); ?>">Certificate</a></p></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="callout callout-info">
                    <h4>You have not attempted any exams so far!</h4>
                </div>
            <?php } ?>

        </div>
        <h4></h4>
        <!--exam-->
        <h4 class="page-header">List of Exams</h4>
        <div class="row">
            <?php
            if ($userexams) {
                foreach ($userexams as $userexam) {
                    $questions = Question::find_all_by_exam_id($userexam->exam->id, array('include' => array('answer')));
                    $exam_marks = 0;
                    $user_marks = 0;
                    if ($questions) {
                        foreach ($questions as $question) {
                            $exam_marks += $question->marks;
                            $correct_answers = array();
                            foreach ($question->answer as $answer) {
                                if ($answer->correct == 1) {
                                    array_push($correct_answers, $answer->id);
                                }
                            }
                            $useranswer = Userquestion::find_by_user_id_and_question_id($userexam->user_id, $question->id);
                            if (!empty($useranswer)) {
                                if (in_array($useranswer->answer, $correct_answers)) {
                                    $user_marks += $question->marks;
                                }
                            }
                        }
                    }
                    $perfomance = ($exam_marks != 0) ? ($user_marks / $exam_marks) * 100 : 0;
                    $perfomance = $perfomance . '%';
                    ?>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title"><?php echo $userexam->exam->name; ?></h4>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">Date of Exam <?php echo format_date($userexam->start); ?> <br> <br> </div><!--/col-lg-8 -->
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <label>Your Score  <?php echo $perfomance; ?></label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: <?php echo $perfomance; ?>;">
                                                <span class="sr-only"><?php echo $perfomance; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <label>Pass Mark <?php echo $userexam->exam->pass_mark; ?>%</label>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: <?php echo $userexam->exam->pass_mark; ?>%;">
                                                <span class="sr-only"><?php echo $userexam->exam->pass_mark; ?>%</span>
                                            </div>
                                        </div>
                                    </div>
                                    

                                </div><!--/row -->
                                <?php 
                                    if($perfomance >= $userexam->exam->pass_mark.'%'){
                                    ?>
                                        <div class="row">
                                            <div class="col-lg-4"><p><a class="btn btn-warning" href="<?php echo site_url('exams/viewresults/' . $userexam->exam->id); ?>">View Results</a></p></div>
                                            <div class="col-lg-4"><p><a class="btn btn-info" target="_blank"  href="<?php echo site_url('exams/certificate/' . $userexam->exam->id); ?>">Certificate</a></p></div>
                                            <div class="col-lg-4"><p><a class="btn btn-success" target="_blank"  href="#">Passed</a></p></div>
                                        </div>
                                        <?php
                                    } else {
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-4"><p><a class="btn btn-warning" href="<?php echo site_url('exams/viewresults/' . $userexam->exam->id); ?>">View Results</a></p></div>
                                            <div class="col-lg-4"><p><a class="btn btn-danger" target="_blank"  href="#">Failed</a></p></div>
                                        </div>
                                        <?php }
                                    ?>

                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="callout callout-info">
                    <h4>You have not attempted any exams so far!</h4>
                </div>
            <?php } ?>

        </div>
        <!--end exam-->
    </div>
</div>