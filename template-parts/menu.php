<?php
$logo_stadt = esc_attr(get_theme_mod('jmh_logo_stadt', 'Deine Stadt'));
$logo_subtext = esc_attr(get_theme_mod('jmh_logo_subtext', 'muss handeln'));
$menu_width = esc_attr(get_theme_mod('jmh_menu_width', '50'));

$kubase_menu_color = get_post_meta($post->ID, 'kubase_menu_color', true);
$kubase_menu_color_class = $kubase_menu_color ? 'dark' == $kubase_menu_color ? 'main-navigation-dark' : 'main-navigation-bright' : 'main-navigation-dark';
?>



<nav id="site-navigation" class="main-navigation <?php echo $kubase_menu_color_class ?>">
    <div class="nav-background"></div>
    <div class='container nav-container'>



        <div class="nav--upper">
            <a class="nav--logo" href="<?php echo esc_url(home_url('/')); ?>">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 140.357 91.601">
                    <defs>
                        <clipPath id="a" transform="translate(-2.972 -2.406)">
                            <rect x="2.972" y="2.405" width="140.357" height="91.601" fill="none" />
                        </clipPath>
                    </defs>

                    <g>
                        <path fill="inherit" d="M143.329,67.347h-2.97l-2.828,6.787a18.7,18.7,0,0,1-3.346.283c-4.525,0-7.871-1.556-9.945-4.572-1.555-2.357-2.4-5.562-2.4-9.615,0-4.619,1.272-8.436,3.723-11.076,2.262-2.4,5.232-3.534,9.332-3.534.566,0,1.6.047,2.545.094l2.592,6.834h2.922V44.3a46.481,46.481,0,0,0-10.51-1.6,22.288,22.288,0,0,0-9.85,2.074c-5.844,2.828-9.285,8.484-9.285,15.883,0,5.185,1.65,9.332,4.619,12.254,3.063,2.923,7.494,4.525,13.008,4.525a31.427,31.427,0,0,0,7.73-.9c.989-.236,4.006-.99,4.006-.99ZM98.655,94.007,113.889,4.152h-4.463L94.094,94.007ZM97.368,28.769a7.831,7.831,0,0,0-1.885-5.42,23.892,23.892,0,0,0-4.949-3.959l-4.854-3.3c-3.629-2.451-4.148-3.064-4.148-5,0-2.875,2.027-4.336,6.033-4.336a16.953,16.953,0,0,1,3.488.377l2.545,6.6h2.781V5.627s-2.027-.518-2.922-.754a32.581,32.581,0,0,0-7.023-.989c-5.8,0-12.16,2.733-12.16,9.426a8.191,8.191,0,0,0,2.969,6.08,20.876,20.876,0,0,0,3.488,2.5l4.9,3.252c2.026,1.319,3.959,2.828,3.959,5.467a4.544,4.544,0,0,1-1.084,3.111c-1.037,1.131-2.875,1.743-5.326,1.743a21.851,21.851,0,0,1-3.488-.377L77.055,28.3H74.274v8.248s1.6.472,3.488.849a35.742,35.742,0,0,0,8.059.942A13.8,13.8,0,0,0,93.5,36.263a8.793,8.793,0,0,0,3.864-7.494M46.152,41.705H29.074L38.2,19.1a65.61,65.61,0,0,0,2.523,7.763ZM79.823,72.756v-3.2l-7.957-3.979L46.734,2.406H38.68L10.734,65.575,2.972,69.554v3.2H27.521v-3.2l-8.054-3.979L26.939,47.43H48.093l6.4,18.145-7.763,3.979v3.2Z" transform="translate(-2.972 -2.406)" fill="#1d1d1b" />
                    </g>
                </svg>


                <h1><?php echo $logo_stadt; ?></h1>

            </a>


            <div class="nav--links">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'menu_id'        => 'primary-menu',
                    'container'      => ''
                ));
                ?>
            </div>

            <div class="nav--mobile-langSwitch">
                <a class="nav--mobile-langSwitch-item" href="">
                    <h1>E</h1>
                </a>
                <a class="nav--mobile-langSwitch-item" href="">
                    <h1>F</h1>
                </a>
                <a class="nav--mobile-langSwitch-item" href="">
                    <h1>D</h1>
                </a>
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
    <div class="nav--mobile container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_id'        => 'primary-menu',
            'container'      => ''
        ));
        ?>
    </div>
</nav><!-- #site-navigation -->