<?php

// function ku_base_customize_logo($wp_customize)
// {
//     $wp_customize->add_section('jmh_logo', array(
//         'title'    => 'LOGO',
//         'priority' => '1'
//     ));

//     $wp_customize->add_setting('jmh_logo_stadt', array(
//         'default'        => 'Deine Stadt',
//     ));
//     $wp_customize->add_setting('jmh_logo_subtext', array(
//         'default'        => 'muss handeln',
//     ));

//     $wp_customize->add_control('jmh_logo_stadt', array(
//         'label'   => 'City Name',
//         'section' => 'jmh_logo',
//         'type'    => 'text',
//         'setting' => 'jmh_logo_stadt'
//     ));
//     $wp_customize->add_control('jmh_logo_subtext', array(
//         'label'   => 'Sub Text',
//         'section' => 'jmh_logo',
//         'type'    => 'text',
//         'setting' => 'jmh_logo_subtext'
//     ));
// }
// add_action('customize_register', 'ku_base_customize_logo');



Kirki::add_section('ku_base_logo', array(
    'title'          => esc_html__('Logo', 'kirki'),
    'description'    => esc_html__('Logo', 'kirki'),
    'panel'          => 'ku_base_theme',
    'priority'       => 160,
));



Kirki::add_field('theme_config_id', [
    'type'     => 'text',
    'settings' => 'ku_base_logo_subtitle',
    'label'    => esc_html__('Text Control', 'kirki'),
    'section'  => 'ku_base_logo',
    'default'  => esc_html__('subtitle', 'kirki'),
    'priority' => 10,
    'transport'   => 'auto',
]);
