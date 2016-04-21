<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/activity_explanation.js" type="text/javascript"></script>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <?php
        echo form_open($form_action);
        echo form_hidden('question_id', $explanation->id);
        echo form_hidden('activity_id', $explanation->activity_id);
        ?>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-xs-7">
                        <?php
                        echo $explanation->question;
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">Option 1</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <label>Question</label>
                                        <input type="text" class="form-control required" name="question[]" value="" />
                                    </div>
                                    <div class="col-xs-1" style="padding-top:30px;">=</div>
                                    <div class="col-xs-5">
                                        <label>Answer</label>
                                        <input type="text" class="form-control required" name="answer[]" value="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-footer clearfix">
                <div class="input_fields_wrap ">
                    <button class="add_field_button">Add More</button>
                </div>
                <div class="form-group col-xs-7">
                    <button type="submit" class="btn btn-primary  pull-right">Submit</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


