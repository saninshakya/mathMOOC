<header class="header">
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <script src="<?php echo base_url(); ?>assets/dist/js/formValidation.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/bootstrap.js" type="text/javascript"></script>
    <link src="<?php echo base_url(); ?>assets/dist/css/formValidation.css" rel="stylesheet"></script>
    <link src="<?php echo base_url(); ?>assets/dist/css/bootstrap.css" rel="stylesheet"></script>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-inverse" role="navigation" style="height:auto">
        <div class="container">
            <div class="navbar-left">
                <div class="logo"><a href="<?php echo site_url('main'); ?>">MathMOOC</a></div>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li class="c1"><a href="<?php echo site_url('main'); ?>" <?php echo ($menu == 'main') ? 'class="active"' : ''; ?>>HOME</a></li>
                    <li class="c2"><a href="<?php echo site_url('exams'); ?>"  <?php echo ($menu == 'exams') ? 'class="active"' : ''; ?>>QUIZ</a></li>
                    <li class="c3"><a href="<?php echo site_url('activities'); ?>"  <?php echo ($menu == 'activities') ? 'class="active"' : ''; ?>>ACTIVITY</a></li>
                    <li class="c10"><a href="<?php echo site_url('worksheets'); ?>"  <?php echo ($menu == 'worksheets') ? 'class="active"' : ''; ?>>WORKSHEET</a></li>
                    <li class="c4"><a href="<?php echo site_url('main/contact'); ?>"  <?php echo ($menu == 'contact') ? 'class="active"' : ''; ?>>CONTACT</a></li>

                    <?php if (!$this->ion_auth->logged_in()) { ?>
                        <li class="c5"><a href="<?php echo site_url('main/login'); ?>" id="login_link" class="toggle-modal">LOGIN</a></li>
                        <?php
                    } else {
                        $user = $this->ion_auth->user()->row();
                        ?>
                        <li class="c6 dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>My Account <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu" id="user_menu">
                                <li><a href="<?php echo site_url('users/exams'); ?>">My Exams</a></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="c7 dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $user->username; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('users/profile'); ?>">Profile</a></li>
                                <li><a href="<?php echo site_url('auth/logout'); ?>">Sign out</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
