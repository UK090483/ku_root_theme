<?php

function ku_base_customize_menu($wp_customize)
{
    $wp_customize->add_section('jmh_menu', array(
        'title'    => 'Menu',
        'priority' => '1'
    ));

    $wp_customize->add_setting('jmh_menu_width', array(
        'default'        => 50,
    ));

    $wp_customize->add_control('jmh_menu_width', array(
        'label'   => 'Menu Width',
        'section' => 'jmh_menu',
        'type'    => 'range',
        'setting' => 'jmh_menu_width',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
        ),
    ));
}
add_action('customize_register', 'ku_base_customize_menu');

function  ku_base_customize_menu_generate_css($css)
{
    return $css . ' sdfk lsdfösdlfkölk';
}
add_filter('ku_base_generate_css',  'ku_base_customize_menu_generate_css');
