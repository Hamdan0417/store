<?php
/**
 * Template Name: FAQ
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </main>
</div>

<?php get_footer();
