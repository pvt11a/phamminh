<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="author" content="pvt" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />
<link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/images/searchbtn.PNG"/>
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo bloginfo('template_directory'); ?>/plugin/skdslider.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/easyzoom.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /><?php } ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="bg_header">
<header class="row">
    <div class="col-sm-6" id="logo">
        <img src="<?php echo bloginfo('template_directory'); ?>/images/logo.jpg" width="239" height="97" />
    </div><!--end logo-->
    <div class="col-sm-6" id="right_header">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <?php 
                    pll_the_languages( array(
 
                       'show_flags' => 1,
                       'hide_if_empty' => 0,
                       'hide_current' => 1,
                     
                    ));
                ?>
            </div>
        </div>
        <nav class="row" id="menu_header">
            <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'container'=>'',
                    'fallback_cb' => 'alert_menu',
                    'menu_class'  => 'nav nav-pills',
                    )
            );
        
        ?>   
        </nav>
    </div><!--end  menu_header-->
</header>

<nav class="row" id="main_menu">
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'container'=>'',
                    'fallback_cb' => 'alert_menu'
                    )
            );
        
        ?>    
        <div class="clear"></div>

</nav><!--end nav -->

<nav class="row" id="main_menu_res">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo get_site_url(); ?>">Cao Minh</a>
    </div>
    <div class="collapse navbar-collapse" id="menu-collapse">
        <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'container'=>'',
                    'fallback_cb' => 'alert_menu'
                    )
            );
        
        ?>   
        <div class="clear"></div>
    </div>
</nav><!--end nav res-->

</div><!--end bg_header-->