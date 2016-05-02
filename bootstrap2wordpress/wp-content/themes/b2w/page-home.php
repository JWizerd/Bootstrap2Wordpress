<?php
/**
 * Template Name:  Home
 */
get_header(); ?>
  
  <!-- HERO SECTION -->

<?php get_template_part('content', 'hero'); ?>
  
  <!-- BOOST YOUR INCOME -->

<?php get_template_part('content', 'boostIncome'); ?>
  
  <!-- WHO BENEFITS -->

<?php get_template_part('content', 'whoBenefits'); ?>
  
  <!-- COURSE FEATURES -->

<?php get_template_part('content', 'courseFeatures'); ?>

  <!-- PROJECT FEATURES -->

<?php get_template_part('content', 'projectFeatures'); ?>
  
  <!-- VIDEO FEATURETTE -->

<?php get_template_part('content', 'videoFeaturette'); ?>

  <!-- TESTIMONIALS -->

<?php get_template_part('content', 'testimonials'); ?>  

<?php get_footer(); ?>