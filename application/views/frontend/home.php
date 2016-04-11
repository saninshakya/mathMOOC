<div class="row carousel-holder">
    <div class="col-md-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo site_url('assets/img/banner_01.png'); ?>" alt="First slide">
                </div>
                <div class="item">
                    <img src="<?php echo site_url('assets/img/banner_02.png'); ?>" alt="First slide">
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

<div class="container">
    <div class="row">
        <?php foreach ($exams as $exam) { ?>
            <div class="col-xs-6 col-sm-4">
                <div class="list-group">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title"><?php echo $exam->name; ?></h3>
                        </div>
                        <div class="box-body">
                            <p><?php echo limit_text($exam->description); ?></p>
                            <p><a href="<?php echo site_url('exams/takeexam/' . $exam->id); ?>" class="btn btn-info toggle-modal ">Take Exam<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></p>
                        </div><!-- /.box-body -->
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>


    <div class="row">
        <?php
        foreach ($topics as $topic) {
            ?>
            <div class="col-xs-6 col-sm-4">
                <div class="thumbnail">
                    <?php
                    @$image = $topic->image;
                    if (!empty($image)) {
                        ?>
                        <a href="<?php echo site_url('activities/activity/' . $topic->id); ?>"><?php echo "<img src='$image' >"; ?></a>
                        <?php
                    } else {
                        ?>
                        <a href="<?php echo site_url('activities/activity/' . $topic->id); ?>"><img src = "assets/img/default.jpg" alt = "MathMOOC"></a>
                        <?php
                    }
                    ?>
                    <div class="caption">
                        <h4><a href = "<?php echo site_url('activities/activity/' . $topic->id); ?>"><?php echo $topic->title; ?></a></h4>
                        <p><?php echo limit_text($topic->description, 200); ?></p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.c1').addClass('active');
    })
</script>
