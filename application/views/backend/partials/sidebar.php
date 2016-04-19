<!-- Left side column. contains the logo and sidebar -->
<?php $user = $this->ion_auth->user()->row(); ?>
<aside class="left-side sidebar-offcanvas">                
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left info">
                <p>Hello, <?php echo $user->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i>Available</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="<?php echo site_url('admin/dashboard'); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview <?php echo (isset($activemenu) && $activemenu == 'categories') ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Categories</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('admin/categories/create'); ?>"><i class="fa fa-angle-double-right"></i> Add Category</a></li>
                    <li><a href="<?php echo site_url('admin/categories'); ?>"><i class="fa fa-angle-double-right"></i> View Categories</a></li>
                </ul>
            </li>
            
            <li  class="treeview <?php echo (isset($activemenu) && $activemenu == 'exams') ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Exams</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('admin/exams/create'); ?>"><i class="fa fa-angle-double-right"></i> Add Exam</a></li>
                    <li><a href="<?php echo site_url('admin/exams'); ?>"><i class="fa fa-angle-double-right"></i> View Exams</a></li>
                </ul>
            </li>
            

            <li class="treeview <?php echo (isset($activemenu) && $activemenu == 'users') ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Users</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('admin/users/create'); ?>"><i class="fa fa-angle-double-right"></i> Add Student</a></li>
                    <li><a href="<?php echo site_url('admin/users'); ?>"><i class="fa fa-angle-double-right"></i> View Students</a></li>
                    <li><a href="<?php echo site_url('admin/users/create_parent'); ?>"><i class="fa fa-angle-double-right"></i> Add Parent</a></li>
                </ul>
            </li>
            <!-- Topic View -->
            <li class="treeview <?php echo (isset($activemenu) && $activemenu == '') ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Topics</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('admin/topics/create'); ?>"><i class="fa fa-angle-double-right"></i> Add Topic</a></li>
                    <li><a href="<?php echo site_url('admin/topics'); ?>"><i class="fa fa-angle-double-right"></i> View Topics</a></li>
                </ul>
            </li>
            <!--Activity View-->
            <li  class="treeview <?php echo (isset($activemenu) && $activemenu == 'activities') ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-th"></i> <span>Activities</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('admin/activities/create'); ?>"><i class="fa fa-angle-double-right"></i> Add Activity</a></li>
                    <li><a href="<?php echo site_url('admin/activities'); ?>"><i class="fa fa-angle-double-right"></i> View Activities</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>