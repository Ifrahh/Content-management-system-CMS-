<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="<?php bloginfo ('charset'); ?> " />
    <title> 
    <?php bloginfo('name'); ?> | <?php wp_title(); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body>
<?php bloginfo('name'); ?>


<div id="wrapper">
<div id="header"> 

<div id="logo">
<h2> <?php bloginfo('name'); ?> </h2>
<h4> <?php bloginfo('description'); ?> </h4>
</div> <!-- end of logo -->

<div id="menu">
<?php wp_nav_menu(array('theme_location'=> 'primary')); ?>

</div>

</div> <!-- end of header -->