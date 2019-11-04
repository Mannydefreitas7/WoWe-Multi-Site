<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php require('head.php'); ?>
  <body <?php body_class(''); ?>>

<?php 
  $header_option = get_theme_mod( 'header_type'); 
  
      if ( $header_option == 'header-block-center-cta') {
        get_template_part('inc/header/header' , 'block-center-cta');
      }
      elseif( $header_option == 'header-block-center') {
        get_template_part('inc/header/header' , 'block-center'); 
      }
      elseif( $header_option == 'header-block-left-cta') {
        get_template_part('inc/header/header' , 'block-left-cta'); 
      }
      elseif( $header_option == 'header-left-cta') {
        get_template_part('inc/header/header' , 'left-cta'); 
      }
      elseif( $header_option == 'header-left-phone') {
        get_template_part('inc/header/header' , 'left-phone'); 
      }
      else if ( $header_option == 'header-left') {
        get_template_part('inc/header/header' , 'left'); 
      }
      else {
        get_template_part('inc/header/header' , 'left'); 
      }
?>