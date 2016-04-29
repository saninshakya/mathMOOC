<script type="text/javascript">
$(function () {
    <?php
        $groupId = $this->ion_auth->get_users_groups()->row()->id;
    if($groupId='3'){
        echo '$(".c1").hide(); $(".c2").hide(); $(".c3").hide(); $(".c4").hide(); $(".c10").hide();';

    }
    ?>
});
</script>
<div id="service">
    <div class="container middlecontent">
        <h4 class="page-header">My Exams</h4>
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
                                        <label>Your Score  <?php //echo $perfomance; ?></label>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: <?php echo $perfomance; ?>;">
                                                <span class="sr-only"><?php echo $perfomance; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 ">
                                        <label>Pass Mark <?php echo (2/3)*$exam_marks; ?>%</label>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: <?php echo (2/3)*$exam_marks; ?>%;">
                                                <span class="sr-only"><?php echo (2/3)*$exam_marks; ?>%</span>
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
    </div>
</div>