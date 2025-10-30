<?php
/**
 * Template Name: FAQ
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php
            get_template_part( 'faq', 'content' );
            ?>
        </div>
    </main>
</div>

<?php get_footer();
