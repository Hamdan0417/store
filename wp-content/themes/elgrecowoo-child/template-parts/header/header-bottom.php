<div id="bottom-bar" class="header-bottom d-none d-xl-block">
    <div class="container">
        <nav class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary_menu',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav>
    </div>
</div>
