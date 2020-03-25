<?php

/**
 * Defines customizer options
 *
 * @package Customizer Library Demo
 */
require get_theme_file_path('/customizer/customizer-library/customizer-library.php');



class Ku_base_Customizer
{
    private static $instance;
    public static $sections = array();
    public static $options = array();
    public static $panels = array();
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function add_section($section = array())
    {
        self::$sections[] = $section;
    }
    public static function add_option($option = array())
    {
        self::$options[$option['id']] = $option;
    }
    public static function add_panel($panel = array())
    {
        self::$panels[] = $panel;
    }
    public static function start_up()
    {
        self::$options['sections'] = self::$sections;
        self::$options['panels'] = self::$panels;
        $customizer_library = Customizer_Library::Instance();
        $customizer_library->add_options(self::$options);
    }
}





function customizer_library_demo_options2()
{
    require get_template_directory() . '/customizer/tester.php';
    Ku_base_Customizer::start_up();
}
add_action('init', 'customizer_library_demo_options2');
