<?php


require get_theme_file_path('/customizer/kirki-3.1.0/kirki.php');

Kirki::add_config('ku_base_theme', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
));

Kirki::add_panel('ku_base_theme', array(
    'priority'    => 1,
    'title'       => esc_html__('Theme', 'kirki'),
    'description' => esc_html__('Theme', 'kirki'),
));

// LOGO 
require get_template_directory() . '/customizer/logo.php';

// MENU 
require get_template_directory() . '/customizer/menu.php';

// FOOTER
require get_template_directory() . '/customizer/footer.php';
// Container
require get_template_directory() . '/customizer/container.php';
// Typogrphie
require get_template_directory() . '/customizer/typography.php';




function ku_base_generateCss()
{
    $value = '.bla{ color: red}';
    return  apply_filters('ku_base_generate_css', $value);
}
