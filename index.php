<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php  bloginfo('charset'); ?>">

    <?php wp_head(); ?>
     
</head>
<body <?php body_class(); ?>>
    
    <?php do_action('about-me'); ?>

    <hr>

    <?php do_action('about-bangladesh'); ?>

    <hr>

    <?php do_action('about-wordpress'); ?>






    <?php wp_footer() ?>
</body>
</html>
