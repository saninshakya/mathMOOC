<div id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default" style="background:#f2f8fb">
                    <div class="panel-body">
                        <table>
                            <thead>
                                <tr>
                                    <th width="5%"></th>
                                    <th width="80%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><h3 style="color:#06F;"><?php echo $activity->activity_name; ?></h3></td>    
                                </tr>
                                <tr>
                                    <td><i class="fa fa-file fa-4x"></i></td>
                                    <td><?php echo $activity->description; ?></td>
                                </tr>
                            <tr>
                                <td> <a class="btn btn-danger extra_space" href="<?php  echo site_url('activities');     ?> ">Cancel</a> </td>
                                <td><p>
                                        <a class="btn btn-success pull-right extra_space " href="<?php echo site_url('activities/dopractice/' . $activity->id); ?>">Let's Start</a>
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>