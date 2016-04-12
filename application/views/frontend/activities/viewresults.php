<div id="service">
    <div class="container middlecontent">
        <div class="row">

            <div class="col-lg-10">
                <h4>Activity Results Summary</h4>
                <div class="hline"></div>
                <br>
            </div>
            <div class="col-lg-2"><a class="btn btn-warning" href="<?php echo site_url('users/activities'); ?>"> My Exams History</a></div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">Exam Information</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <tr><td width="20%">Name</td><td><?php echo $activity->activity_name; ?></td> </tr>
                    <tr><td>Description</td><td><?php echo $activity->description; ?></td> </tr>
                    <tr><td>Duration</td><td><span class="btn btn-sm btn-success"><?php echo '60'; ?> Minutes</span> </td> </tr>
                </table>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">Results Summary</div>
            <div class="panel-body">
                <label>Attempted <?php echo $performance['questions_answered']; ?></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-info" style="width: <?php echo $performance['answered_percent']; ?>%;">
                        <span class="sr-only"></span>
                    </div>
                </div>
                <label>Answered correctly <?php echo $performance['questions_answered_correct']; ?></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" style="width: <?php echo $performance['correct_percent']; ?>%;">
                        <span class="sr-only"></span>
                    </div>
                </div>
                <label>Answered wrongly <?php echo $performance['questions_answered_wrong']; ?></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" style="width: <?php echo $performance['wrong_percent']; ?>%;">
                        <span class="sr-only"></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.c3').addClass('active');
    });
</script>