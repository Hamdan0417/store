<?php
/**
 * Template Name: White Paper
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php
            get_template_part( 'white-paper', 'content' );
            ?>
        </div>
    </main>
</div>

<?php get_footer();
