<?php




Kirki::add_section('ku_base_typography', array(
    'title'          => esc_html__('Typography', 'kirki'),
    'description'    => esc_html__('Typography', 'kirki'),
    'panel'          => 'ku_base_theme',
    'priority'       => 160,
));

Kirki::add_field('theme_config_id', [
    'type'        => 'toggle',
    'settings'    => 'ku_base_use_fonts',
    'label'       => esc_html__('Use external fonts', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => '1',
    'priority'    => 10,
]);

Kirki::add_field('theme_config_id', [
    'active_callback'  => [
        [
            'setting'  => 'ku_base_use_fonts',
            'operator' => '===',
            'value'    => true,
        ],
    ],
    'type'        => 'typography',
    'settings'    => 'ku_base_typography_p',
    'label'       => esc_html__('Control Label', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => [
        'font-family'    => 'Roboto',
        // 'variant'        => 'regular',
        // 'font-size'      => '14px',
        // 'line-height'    => '1.5',
        // 'letter-spacing' => '0',
        // 'color'          => '#333333',
        // 'text-transform' => 'none',
        // 'text-align'     => 'left',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'p',
        ],
    ],
]);
Kirki::add_field('theme_config_id', [
    'active_callback'  => [
        [
            'setting'  => 'ku_base_use_fonts',
            'operator' => '===',
            'value'    => true,
        ],
    ],
    'type'        => 'typography',
    'settings'    => 'ku_base_typography_h',
    'label'       => esc_html__('Headers', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => [
        'font-family'    => 'Roboto',
        // 'variant'        => 'regular',
        // 'font-size'      => '14px',
        // 'line-height'    => '1.5',
        // 'letter-spacing' => '0',
        // 'color'          => '#333333',
        // 'text-transform' => 'none',
        // 'text-align'     => 'left',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => array('h1', 'h2', 'h3', 'h4', 'h5'),
        ],
    ],
]);


Kirki::add_field('theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'ku_base_typography_p_settings',
    'label'       => esc_html__('p', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => [
        'font-size'      => '14px',
        'line-height'    => '1.5',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'p',
        ],
    ],
]);

Kirki::add_field('theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'ku_base_typography_h1_settings',
    'label'       => esc_html__('H1', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => [
        'font-size'      => '14px',
        'line-height'    => '1.5',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h1',
        ],
    ],
]);
Kirki::add_field('theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'ku_base_typography_h2_settings',
    'label'       => esc_html__('H2', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => [
        'font-size'      => '14px',
        'line-height'    => '1.5',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h2',
        ],
    ],
]);
Kirki::add_field('theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'ku_base_typography_h3_settings',
    'label'       => esc_html__('H3', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => [
        'font-size'      => '14px',
        'line-height'    => '1.5',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h3',
        ],
    ],
]);
Kirki::add_field('theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'ku_base_typography_h4_settings',
    'label'       => esc_html__('H4', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => [
        'font-size'      => '14px',
        'line-height'    => '1.5',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h4',
        ],
    ],
]);
Kirki::add_field('theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'ku_base_typography_h5_settings',
    'label'       => esc_html__('H5', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => [
        'font-size'      => '14px',
        'line-height'    => '1.5',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h5',
        ],
    ],
]);
Kirki::add_field('theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'ku_base_typography_h6_settings',
    'label'       => esc_html__('H6', 'kirki'),
    'section'     => 'ku_base_typography',
    'default'     => [
        'font-size'      => '14px',
        'line-height'    => '1.5',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => 'h6',
        ],
    ],
]);
