<?php
require_once('wp-load.php');

// Home Page
$home_page_content = file_get_contents('wp-content/themes/elgrecowoo-child/home-content.php');
$home_page = array(
    'post_title'    => 'Home',
    'post_content'  => $home_page_content,
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template' => 'page-home.php'
);
wp_insert_post( $home_page );

// White Paper Page
$white_paper_content = file_get_contents('wp-content/themes/elgrecowoo-child/white-paper-content.php');
$white_paper_page = array(
    'post_title'    => 'White Paper',
    'post_content'  => $white_paper_content,
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template' => 'page-white-paper.php'
);
wp_insert_post( $white_paper_page );

// FAQ Page
$faq_content = file_get_contents('wp-content/themes/elgrecowoo-child/faq-content.php');
$faq_page = array(
    'post_title'    => 'FAQ',
    'post_content'  => $faq_content,
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template' => 'page-faq.php'
);
wp_insert_post( $faq_page );
