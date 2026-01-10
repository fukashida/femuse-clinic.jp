<?php

function my_home_uri()
{
  $uri = home_url($path = '/', $scheme = 'relative');
  echo $uri;
}

function my_theme_uri()
{
  $uri = get_template_directory_uri();
  echo $uri;
}

function register_style()
{
  wp_register_style('style-reset', get_template_directory_uri() . '/assets/css/reset.css');
  wp_register_style('style-common', get_template_directory_uri() . '/assets/css/common.css?20241030');
  wp_register_style('style-index', get_template_directory_uri() . '/assets/css/index.css?20241030');
  wp_register_style('style-about', get_template_directory_uri() . '/assets/css/about.css?20241030');
  wp_register_style('style-menu', get_template_directory_uri() . '/assets/css/menu.css?20241030');
  wp_register_style('style-doctor', get_template_directory_uri() . '/assets/css/doctor.css?20241030');
  wp_register_style('style-price', get_template_directory_uri() . '/assets/css/price.css');
}
function add_style()
{
  register_style();
  wp_enqueue_style('style-reset');
  wp_enqueue_style('style-common');

  if (is_home() || is_front_page()) {
    wp_enqueue_style('style-index');
  }
  if (is_page('about')) {
    wp_enqueue_style('style-about');
  }
  if (is_single()) {
    wp_enqueue_style('style-menu');
  }
  if (is_page('menu')) {
    wp_enqueue_style('style-menu');
  }
  if (is_page('doctor')) {
    wp_enqueue_style('style-doctor');
  }
  if (is_page('price')) {
    wp_enqueue_style('style-price');
  }
}

function register_script()
{
  wp_register_script('js-common', get_template_directory_uri() . '/assets/js/common.js', false, '1.0', true);
  wp_register_script('js-index', get_template_directory_uri() . '/assets/js/index.js', false, '1.0', true);
  wp_register_script('js-menu-detail', get_template_directory_uri() . '/assets/js/menu-detail.js', false, '1.0', true);
}

function add_script()
{
  register_script();
  wp_enqueue_script('js-common');
  if (is_home() || is_front_page()) {
    wp_enqueue_script('js-index');
  }
  if (is_single()) {
    wp_enqueue_script('js-menu-detail');
  }
}

add_action('wp_enqueue_scripts', 'add_style', 9);
add_action('wp_enqueue_scripts', 'add_script');
