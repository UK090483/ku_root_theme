<?php

function ku_base_customize_logo($wp_customize)
{

    $wp_customize->add_section('jmh_logo', array(
        'title'    => 'LOGO',
        'priority' => '1'
    ));

    $wp_customize->add_setting('jmh_logo_stadt', array(
        'default'        => 'Deine Stadt',
    ));
    $wp_customize->add_setting('jmh_logo_subtext', array(
        'default'        => 'muss handeln',
    ));

    $wp_customize->add_control('jmh_logo_stadt', array(
        'label'   => 'City Name',
        'section' => 'jmh_logo',
        'type'    => 'text',
        'setting' => 'jmh_logo_stadt'
    ));
    $wp_customize->add_control('jmh_logo_subtext', array(
        'label'   => 'Sub Text',
        'section' => 'jmh_logo',
        'type'    => 'text',
        'setting' => 'jmh_logo_subtext'
    ));
}
