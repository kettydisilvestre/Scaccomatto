<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Restaurant
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>
?> <?php 
if ( is_front_page() ) { ?>
<div class="header">
  <?php }else{?>
  <div class="header-innerpage">
    <?php
  }?>
  <div class="container">
    <div class="logo">
      <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    </div><!-- logo -->
    <div class="toggle">
      <a class="toggleMenu" href="#"><?php _e('Menu','restaurant'); ?></a>
    </div><!-- toggle --> 
    <div class="sitenav">                  
      <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
    </div><!-- nav --><div class="clear"></div>
  </div><!-- container -->
</div><!-- end.header -->
