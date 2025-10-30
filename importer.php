<?php
require_once('wp-load.php');

// Home Page Content
$home_content = '
<div class="home-section">
    <div class="container">
        <h1>نبني منظومة Web3 للتجارة الإلكترونية</h1>
        <p>CHEASY في مرحلة ما قبل الإطلاق: نطوّر متجرًا رقمياً ومنصة رمزية تربط بين الأداء التشغيلي والقيمة المملوكة للمجتمع.</p>
    </div>
</div>
';

$home_page = array(
    'post_title'    => 'Home',
    'post_content'  => $home_content,
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template' => 'page-home.php'
);
wp_insert_post( $home_page );

// White Paper Content
$white_paper_content = '
<div class="white-paper-content">
    <h1>الاستثمار في مستقبل التجارة: بناء طبقة الثقة والملكية في الاقتصاد الرقمي</h1>
    <p>مشروع تشيزي (Cheasy) — ورقة بيضاء استثمارية شاملة</p>
</div>
';

$white_paper_page = array(
    'post_title'    => 'White Paper',
    'post_content'  => $white_paper_content,
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template' => 'page-white-paper.php'
);
wp_insert_post( $white_paper_page );

// FAQ Content
$faq_content = '
<div class="faq-content">
    <h1>الأسئلة الشائعة</h1>
</div>
';

$faq_page = array(
    'post_title'    => 'FAQ',
    'post_content'  => $faq_content,
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template' => 'page-faq.php'
);
wp_insert_post( $faq_page );
