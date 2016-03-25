<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <?php echo ($this->session->flashdata('error')) ? error_msg($this->session->flashdata('error')) : ''; ?>
        <?php echo ($this->session->flashdata('success')) ? success_msg($this->session->flashdata('success')) : ''; ?>
        <div class="box box-info">
            <div class="box-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 2%">#</th>
                            <th style="width: 15%">Name</th>
                            <th style="width: 40%">Description</th>
                            <th style="width: 15%">Action</th>
                        </tr>
                    </thead>
                    <?php
                    if (!empty($topics)) {
                        $count = 1;
                        foreach ($topics as $topic) {
                            ?>
                            <tr>
                                <td><?php echo $count; ?>.</td>
                                <td><?php echo $topic->title; ?></td>
                                <td><?php echo limit_text($topic->description, 200); ?></td>
                                <td>
                                    <?php echo view_btn('admin/topics/view/' . $topic->id); ?>
                                    <?php echo edit_btn('admin/topics/edit/' . $topic->id); ?>
                                    <?php echo delete_btn('admin/topics/delete/' . $topic->id); ?>
                                </td>
                            </tr>
                            <?php
                            $count++;
                        }
                    }
                    ?>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>