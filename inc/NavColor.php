<?php

if (is_admin()) {
    new NavColor;
}

/**
 * The Class.
 */
class NavColor
{

    /**
     * Hook into the appropriate actions when the class is constructed.
     */
    public function __construct()
    {
        add_action('add_meta_boxes', array($this, 'kubase_add_meta_box'));
        add_action('save_post', array($this, 'kubase_save'));
    }

    /**
     * Adds the meta box container.
     */
    public function kubase_add_meta_box($post_type)
    {
        // Limit meta box to certain post types.
        // $post_types = array('page');
        add_meta_box(
            'some_meta_box_name',
            __('Menu', 'textdomain'),
            array($this, 'render_meta_box_content'),
            array('page', 'artists', 'ausstellungen'),
            'side'
        );
    }

    /**
     * Save the meta when the post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function kubase_save($post_id)
    {

        /*
         * We need to verify this came from the our screen and with proper authorization,
         * because save_post can be triggered at other times.
         */

        // Check if our nonce is set.
        if (!isset($_POST['myplugin_inner_custom_box_nonce'])) {
            return $post_id;
        }

        $nonce = $_POST['myplugin_inner_custom_box_nonce'];

        // Verify that the nonce is valid.
        if (!wp_verify_nonce($nonce, 'myplugin_inner_custom_box')) {
            return $post_id;
        }

        /*
         * If this is an autosave, our form has not been submitted,
         * so we don't want to do anything.
         */
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }

        // Check the user's permissions.
        if ('page' == $_POST['post_type']) {
            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } else {
            if (!current_user_can('edit_post', $post_id)) {
                return $post_id;
            }
        }

        /* OK, it's safe for us to save the data now. */

        // Sanitize the user input.
        if (isset($_POST['kubase_menu_color'])) {
            // Update the meta field.
            update_post_meta($post_id, 'kubase_menu_color', $_POST['kubase_menu_color']);
        }
        if (isset($_POST['kubase_menu_space'])) {
            // Update the meta field.
            update_post_meta($post_id, 'kubase_menu_space', $_POST['kubase_menu_space']);
        }
    }

    /**
     * Render Meta Box content.
     *
     * @param WP_Post $post The post object.
     */
    public function render_meta_box_content($post)
    {

        // Add an nonce field so we can check for it later.
        wp_nonce_field('myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce');

        // Use get_post_meta to retrieve an existing value from the database.
        $kubase_menu_color = get_post_meta($post->ID, 'kubase_menu_color', true);
        $kubase_menu_space = get_post_meta($post->ID, 'kubase_menu_space', true);

        // Display the form, using the current value.
        ?>

        <h1>Menu Color</h1>
        <label for="dark">
            Dark
        </label>
        <input type="radio" id="dark" name="kubase_menu_color" <?php echo ($kubase_menu_color == 'dark' or $kubase_menu_color == '') ? 'checked' : '' ?> value='dark' size="25" />


        <label for="bright">
            Bright
        </label>
        <input type="radio" id="bright" name="kubase_menu_color" <?php echo $kubase_menu_color == 'bright' ? 'checked' : '' ?> value='bright' size="25" />

        </br>
        <h1>Menu Space</h1>

        <label for="dark">
            Yes
        </label>
        <input type="radio" id="yes" name="kubase_menu_space" <?php echo ($kubase_menu_space == 'yes' or $kubase_menu_space == '') ? 'checked' : '' ?> value='yes' size="25" />


        <label for="bright">
            No
        </label>
        <input type="radio" id="no" name="kubase_menu_space" <?php echo $kubase_menu_space == 'no' ? 'checked' : '' ?> value='no' size="25" />
<?php
    }
}
