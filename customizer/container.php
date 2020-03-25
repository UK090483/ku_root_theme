<?php


// Kirki::add_panel('ku_base_container', array(
//     'priority'    => 10,
//     'title'       => esc_html__('Container', 'kirki'),
//     'description' => esc_html__('Container', 'kirki'),
// ));

// Kirki::add_section('section_id', array(
//     'title'          => esc_html__('My Section', 'kirki'),
//     'description'    => esc_html__('My section description.', 'kirki'),
//     'panel'          => 'ku_base_container',
//     'priority'       => 160,
// ));

// Kirki::add_field('theme_config_id', [
//     'type'        => 'slider',
//     'settings'    => 'width_mobile',
//     'label'       => esc_html__('This is the label', 'kirki'),
//     'section'     => 'section_id',
//     'default'     => 42,
//     'transport'   => 'auto',
//     'choices'     => [
//         'min'  => 500,
//         'max'  => 750,
//         'step' => 1,
//     ],
//     'output' => array(

//         array(
//             'element'  => '.container',
//             'property' => 'width',
//             'units' => 'px',
//             'media_query' => '@media (max-width: 750px)'
//         ),
//     ),
// ]);
// Kirki::add_field('theme_config_id', [
//     'type'        => 'slider',
//     'settings'    => 'width_tablet',
//     'label'       => esc_html__('This is the label', 'kirki'),
//     'section'     => 'section_id',
//     'default'     => 1000,
//     'transport'   => 'auto',
//     'choices'     => [
//         'min'  => 500,
//         'max'  => 1000,
//         'step' => 1,
//     ],
//     'output' => array(

//         array(
//             'element'  => '.container',
//             'property' => 'width',
//             'units' => 'px',
//             'media_query' => '@media (max-width: 1050px)'
//         ),
//     ),
// ]);

// Kirki::add_field('theme_config_id', [
//     'type'        => 'slider',
//     'settings'    => 'width_desktop',
//     'label'       => esc_html__('This is the label', 'kirki'),
//     'section'     => 'section_id',
//     'default'     => 1398,
//     'transport'   => 'auto',
//     'choices'     => [
//         'min'  => 750,
//         'max'  => 1398,
//         'step' => 1,
//     ],
//     'output' => array(

//         array(
//             'element'  => '.container',
//             'property' => 'width',
//             'units' => 'px',
//             'media_query' => '@media (max-width: 1500px)'
//         ),
//     ),
// ]);


// @media (min-width: 750px) {
//     .container {
//       width: 750px;
//     }
//   }
//   @media (min-width: 1050px) {
//     .container {
//       width: 1000px;
//     }
//   }
//   @media (min-width: 1500px) {
//     .container {
//       width: 1398px;
//     }
//   }
