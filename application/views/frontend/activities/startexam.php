<div id="service">
<div class="container">
    <div class="row">

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
                                    <td><h3 style="color:#06F;"><?php echo $exam->name;?></h3></td>    
                                </tr>
                               <tr>
                                    <td><i class="fa fa-file fa-4x"></i></td>
                                    <td><strong><?php echo $exam->questions;?></strong> multiple choice questions</td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa fa-clock-o fa-4x"></i></span></td>
                                    <td><strong><?php echo $exam->duration;?></strong> minutes exam time</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-thumbs-up fa-4x"></i></td>
                                    <td><strong><?php echo $exam->pass_mark;?>%</strong> mark is needed to pass</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <br>
                                        <ul>
                                                <li>Attempt all the questions.</li>
                                               
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                        <td> <a class="btn btn-danger" href="<?php echo site_url('exams'); ?> ">Cancel</a> </td>
                                    <td><p>
                                        <a class="btn btn-success pull-right" href="<?php echo site_url('exams/doexam/'.$exam->id); ?>">Start Exam</a>
                                        </p></td>
                                    
                                </tr>
                                                            
                           </tbody>
                        </table>
                        </div>
</div>

</div>
</div>
</div>