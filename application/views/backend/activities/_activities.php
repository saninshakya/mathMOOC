<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <?php echo ($this->session->flashdata('error')) ? error_msg($this->session->flashdata('error')) : ''; ?>
        <?php echo ($this->session->flashdata('success')) ? success_msg($this->session->flashdata('success')) : ''; ?>
        <div class="box box-primary">
            <?php echo form_open($form_action); ?>
            <?php
            if (isset($activity)) {
                echo form_hidden('activity_id', $activity->id);
            }
            ?>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group col-xs-12">
                            <label>Topic</label>
                            <select class="form-control required" name="topic_id">
			                	<option value="">Select</option>
			                	<?php foreach ($topics as $topic) { ?>
			                		<option value="<?php echo $topic->id; ?>" <?php echo (isset($activity) && $activity->topic_id == $topic->id) ? 'selected' : ''; ?>><?php echo $topic->title; ?></option>
			                	<?php } ?>
			                	
			                </select>
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Name</label>
                            <input type="text" class="form-control required" name="activity_name" value="<?php echo (isset($activity)) ? $activity->activity_name : ''; ?>" />
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Description</label>
                            <textarea class="form-control editor required" rows="10" name="description"><?php echo (isset($activity)) ? $activity->description : ''; ?></textarea>
                        </div>



                    </div>
                    <div class="col-xs-6">
                        <div class="form-group col-xs-12">
                            <label>Status</label>

                            <div class="radio">
                                <label>
                                    <input type="radio" name="active" id="yes" value="1" <?php echo (isset($activity) && $activity->active == 1) ? 'checked' : ''; ?>>
                                    <small class="badge bg-green">Active</small>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="active" id="no" value="0" <?php echo (isset($activity) && $activity->active == 0) ? 'checked' : ''; ?>>
                                    <small class="badge bg-red">Inactive</small>
                                </label>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="box-footer clearfix">
                <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-primary  pull-right">Submit</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>