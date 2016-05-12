<!doctype html>
<html>
    <?php wp_head(); ?>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
    
    <!--begin styles-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" /> 
<!--end styles-->
    
</head>

<body <?php body_class(); ?>>

   
    <!--begin nav-->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'nav',)); ?> 
    <!--end nav-->