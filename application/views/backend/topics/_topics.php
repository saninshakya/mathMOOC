<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <?php echo ($this->session->flashdata('error')) ? error_msg($this->session->flashdata('error')) : ''; ?>
        <?php echo ($this->session->flashdata('success')) ? success_msg($this->session->flashdata('success')) : ''; ?>
        <div class="box box-primary">

            <?php echo form_open_multipart($form_action); ?>
            <?php
            if (isset($topic)) {
                echo form_hidden('topic_id', $topic->id);
            }
            ?>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-7">
                        <div class="form-group col-xs-12">
                            <label>Title</label>
                            <input type="text" class="form-control required" name="title" value="<?php echo (isset($topic)) ? $topic->title : ''; ?>" />
                        </div>
                        <div class="form-group col-xs-12">
                            <label>Description</label>
                            <textarea class="form-control editor" rows="10" name="description"><?php echo (isset($topic)) ? $topic->description : ''; ?></textarea>
                        </div>
                        <div class="form-group col-xs-6">
                            <label>Cover Image</label>
                            <input type="file" class="form-control" name="que_img" />
                            <?php
                            if (@!empty($topic))
                                echo ($topic->image != '') ? "<img src='../../../$topic->image' alt='MathMOOC' height='150' />" : '';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer clearfix">
                <div class="form-group col-xs-7">
                    <button type="submit" class="btn btn-primary  pull-right">Submit</button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>