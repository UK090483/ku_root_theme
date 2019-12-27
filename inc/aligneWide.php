<?php

function jmh_theme_align_setup()
{

    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'jmh_theme_align_setup');





function jmh_theme_wrap_alignment($block_content, $block)
{

    if (isset($block['attrs']['align']) && in_array($block['attrs']['align'], array('wide', 'full'))) {

        $block_content = sprintf(
            '<div class="%1$s">%2$s</div>',
            'align-wrap align-wrap-' . esc_attr($block['attrs']['align']),
            $block_content
        );
    }
    return $block_content;
}

add_filter('render_block', 'jmh_theme_wrap_alignment', 10, 2);
