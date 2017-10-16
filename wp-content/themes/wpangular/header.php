<!doctype html>
<html ng-app="app" class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wordpress Angular</title>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <?php wp_head(); ?>
</head>
<body>
    <?php
    get_template_part('templates/page','home');
    ?>
</body>
</html>