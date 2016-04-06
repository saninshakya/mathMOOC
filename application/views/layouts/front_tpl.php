<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $template['title'] ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php $settings = Setting::first(); ?>
        <meta name="keywords" content="<?php echo isset($settings->keywords) && $settings->keywords != '' ? $settings->keywords : ''; ?>">
        <?php echo $template['partials']['styles'] ?>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    </head>
    <body>
        <div class="container-fluid">
            <!-- Top header section. Contains the profile details -->
            <?php echo $template['partials']['header'] ?>
            <?php echo $template['body'] ?>
            <?php echo $template['partials']['footer'] ?>
        </div>
    </body>
</html>