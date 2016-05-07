<div class="form-box" id="login-box">
    <?php echo ($this->session->flashdata('error')) ? error_msg($this->session->flashdata('error')) : ''; ?>
    <?php echo ($error) ? error_msg($error) : ''; ?>
    <?php echo ($this->session->flashdata('success')) ? success_msg($this->session->flashdata('success')) : ''; ?>

    <div class="header">
    <img src="<?php echo base_url(); ?>assets/img/lock.png" width="50">
    <p>Teacher Panel</p>
    </div>
    <form action="<?php echo site_url('admin/auth/'); ?>" method="post">
        <div class="body bg-gray">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username"/>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password"/>
            </div>          
        </div>
        <div class="footer">                                                               
            <button type="submit" class="btn bg-olive btn-block">Sign In</button>  
        </div>
    </form>
</div>