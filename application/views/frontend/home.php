<div class="col-md-2">
    <?php foreach ($exams as $exam) { ?>
        <div class="list-group">
            <div class="box box-solid bg-yellow">
                <div class="box-header">
                    <h3 class="box-title"><?php echo $exam->name; ?></h3>
                </div>
                <div class="box-body">
                    <p>
                        <?php echo limit_text($exam->description); ?>
                    </p>
                    <p><a href="<?php echo site_url('exams/takeexam/' . $exam->id); ?>" class="btn btn-info toggle-modal">Take Exam</a>  </p>
                </div><!-- /.box-body -->
            </div>
        </div>
        <?php
    }
    ?>
</div>

<div class="col-md-9">
    <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo site_url('assets/img/doctype-hi-res.jpg'); ?>" alt="First slide">
                    </div>
                    <div class="item">
                        <img src="<?php echo site_url('assets/img/doctype-hi-res.jpg'); ?>" alt="First slide">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>


    <div class="row">
        <?php
        foreach ($topics as $topic) {
            ?>
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h4 class="pull-right">$24.99</h4>
                        <h4><a href="#"><?php echo $topic->title; ?></a>
                        </h4>
                        <p><?php echo $topic->description; ?></p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">15 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>