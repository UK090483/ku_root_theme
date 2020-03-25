<?php
$panel = 'tester';
$section = 'sect1';

Ku_base_Customizer::add_panel(
    array(
        'id' => $panel,
        'title' => __('Panel Examples', 'demo'),
        'priority' => '100'
    )
);
Ku_base_Customizer::add_section(
    array(
        'id' => $section,
        'title' => __('Panel Section', 'demo'),
        'priority' => '10',
        'panel' => $panel
    )
);

Ku_base_Customizer::add_section(

    array(
        'id' => 'sect2',
        'title' => __('Panel Section', 'demo'),
        'priority' => '10',
        'panel' => $panel
    )
);
Ku_base_Customizer::add_option(
    array(
        'id' => 'example-range',
        'label'   => __('Example Range Input', 'demo'),
        'section' => $section,
        'type'    => 'range',
        'input_attrs' => array(
            'min'   => 0,
            'max'   => 10,
            'step'  => 1,
            'style' => 'color: red',
        )
    )
);
