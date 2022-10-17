<?php

function university_files()
{
  wp_enqueue_script('bootstrap-js', get_theme_file_uri('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'));
  wp_enqueue_script('vendors-js', get_theme_file_uri('/vendors/vendors.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0', true);

  wp_enqueue_style('custom-google-font', 'https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap');
  wp_enqueue_style('font-awsome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
  wp_enqueue_style('library-stylesheet', get_theme_file_uri('/lib/owlcarousel/assets/owl.carousel.min.css'));
  wp_enqueue_style('main-style', get_theme_file_uri('/css/style.css'));
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features()
{
  register_nav_menu('headerMenuLocation', 'Header menu location');
  register_nav_menu('footerLocalionOne', 'Footer location one');
  register_nav_menu('footerLocalionTwo', 'Footer location two');

  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');
