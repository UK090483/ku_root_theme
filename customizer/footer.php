<?php

function ku_base_customize_footer($wp_customize)
{
    // FOOTER WIDGETS
    $wp_customize->add_section('jmh_footerwidgets', array(
        'title'    => 'Footer Widges Alignment',
        'priority' => '3'
    ));

    // Height

    $wp_customize->add_setting('jmh_footerwidget_height_small', array(
        'default'        => 100,
    ));

    $wp_customize->add_control('jmh_footerwidget_height_small', array(
        'label'   => 'Footer Widgets Height small screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'range',
        'setting' => 'jmh_footerwidget_height_small',
        'input_attrs' => array(
            'min' => 50,
            'max' => 600,
        ),
    ));
    $wp_customize->add_setting('jmh_footerwidget_height_big', array(
        'default'        => 100,
    ));

    $wp_customize->add_control('jmh_footerwidget_height_big', array(
        'label'   => 'Footer Widgets Height big screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'range',
        'setting' => 'jmh_footerwidget_height_big',
        'input_attrs' => array(
            'min' => 50,
            'max' => 600,
        ),
    ));

    // Alignment
    $wp_customize->add_setting('jmh_footerwidget_activate_alignment', array(
        'default'        => false,
    ));

    $wp_customize->add_control('jmh_footerwidget_activate_alignment', array(
        'label'   => 'Footer Widget alignment activate',
        'section' => 'jmh_footerwidgets',
        'type'    => 'checkbox',
        'setting' => 'jmh_footerwidget_activate_alignment',
    ));
    // widget1 small


    $wp_customize->add_setting('jmh_footerwidget_align_small_1', array(
        'default'        => 'center',
    ));

    $wp_customize->add_control('jmh_footerwidget_align_small_1', array(
        'label'   => 'Widget left alignment small screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'select',
        'setting' => 'jmh_footerwidget_align_small_1',
        'choices' => array(
            'left' => 'Left',
            'center' => 'Center',
            'right' => 'Right',
        ),
    ));
    // widget1 big
    $wp_customize->add_setting('jmh_footerwidget_align_big_1', array(
        'default'        => 'center',
    ));

    $wp_customize->add_control('jmh_footerwidget_align_big_1', array(
        'label'   => 'Widget left alignment big screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'select',
        'setting' => 'jmh_footerwidget_align_big_1',
        'choices' => array(
            'left' => 'Left',
            'center' => 'Center',
            'right' => 'Right',
        ),
    ));

    // widget2 small
    $wp_customize->add_setting('jmh_footerwidget_align_small_2', array(
        'default'        => 'center',
    ));

    $wp_customize->add_control('jmh_footerwidget_align_small_2', array(
        'label'   => 'Widget center alignment small screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'select',
        'setting' => 'jmh_footerwidget_align_small_2',
        'choices' => array(
            'left' => 'Left',
            'center' => 'Center',
            'right' => 'Right',
        ),
    ));
    // widget2 big
    $wp_customize->add_setting('jmh_footerwidget_align_big_2', array(
        'default'        => 'center',
    ));

    $wp_customize->add_control('jmh_footerwidget_align_big_2', array(
        'label'   => 'Widget center alignment big screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'select',
        'setting' => 'jmh_footerwidget_align_big_2',
        'choices' => array(
            'left' => 'Left',
            'center' => 'Center',
            'right' => 'Right',
        ),
    ));

    // widget3 small
    $wp_customize->add_setting('jmh_footerwidget_align_small_3', array(
        'default'        => 'center',
    ));

    $wp_customize->add_control('jmh_footerwidget_align_small_3', array(
        'label'   => 'Widget right alignment small screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'select',
        'setting' => 'jmh_footerwidget_align_small_3',
        'choices' => array(
            'left' => 'Left',
            'center' => 'Center',
            'right' => 'Right',
        ),
    ));
    // widget3 big
    $wp_customize->add_setting('jmh_footerwidget_align_big_3', array(
        'default'        => 'center',
    ));

    $wp_customize->add_control('jmh_footerwidget_align_big_3', array(
        'label'   => 'Widget right alignment big screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'select',
        'setting' => 'jmh_footerwidget_align_big_3',
        'choices' => array(
            'left' => 'Left',
            'center' => 'Center',
            'right' => 'Right',
        ),
    ));
}
add_action('customize_register', 'ku_base_customize_footer');
