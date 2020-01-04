<?php
$logo_stadt = esc_attr(get_theme_mod('jmh_logo_stadt', 'Deine Stadt'));
$logo_subtext = esc_attr(get_theme_mod('jmh_logo_subtext', 'muss handeln'));
$menu_width = esc_attr(get_theme_mod('jmh_menu_width', '50'));

$kubase_menu_color = get_post_meta($post->ID, 'kubase_menu_color', true);
$kubase_menu_color_class = $kubase_menu_color ? 'dark' == $kubase_menu_color ? 'main-navigation-dark' : 'main-navigation-bright' : 'main-navigation-dark';
?>



<nav id="site-navigation" class="main-navigation <?php echo $kubase_menu_color_class ?>">

    <div class='container nav-container'>

        <div class="nav--upper">
            <div class="nav--logo ">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <h1><?php echo $logo_stadt; ?></h1>
                    <h1><?php echo $logo_subtext; ?></h1>
                </a>
            </div>

            <div class="nav--links" style="width:<?php echo $menu_width; ?>%">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_id'        => 'primary-menu',
                    'container'      => ''
                ));
                ?>
            </div>

            <div class="nav--mobile-btn">
                <div class="nav--mobile-btn-custom">
                    <div class="nav--mobile-btn-line"></div>
                    <div class="nav--mobile-btn-line"></div>
                    <div class="nav--mobile-btn-line"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav--mobile">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_id'        => 'primary-menu',
            'container'      => ''
        ));
        ?>
    </div>
</nav><!-- #site-navigation -->