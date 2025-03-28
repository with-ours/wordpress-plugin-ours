<?php
/**
 * Plugin Name: Ours Privacy
 * Plugin URI: https://oursprivacy.com
 * Description: A custom plugin that loads the Ours Privacy Web SDK
 * Version: 1.0.0
 * Author: Ours Privacy
 * Author URI: https://oursprivacy.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: ours
 */

if (!defined('ABSPATH')) {
    exit;
}

// Enqueue our privacy cdn script on all pages
function ours_enqueue_scripts() {
    wp_enqueue_script(
        'ours-script',
        'https://cdn.oursprivacy.com/main.js',
        array(),
        '1.0.0',
        true
    );

    // Add token to script if available
    $token = get_option('ours_privacy_token');
    if (!empty($token)) {        
        // Add initialization code
        wp_add_inline_script('ours-script', '
            window.ours = function (...args) {
                window.ours.queue.push(args);
            };
            window.ours.queue = [];
            window.ours("init", "' . esc_js($token) . '");
        ', 'before');
    }
}
add_action('wp_enqueue_scripts', 'ours_enqueue_scripts'); 


// Add settings page
function ours_add_settings_page() {
    add_options_page(
        'Ours Privacy Settings',
        'Ours Privacy',
        'manage_options',
        'ours-privacy',
        'ours_settings_page'
    );
}
add_action('admin_menu', 'ours_add_settings_page');

// Register settings
function ours_register_settings() {
    register_setting('ours_privacy_settings', 'ours_privacy_token');
}
add_action('admin_init', 'ours_register_settings');

// Settings page HTML
function ours_settings_page() {
    ?>
    <div class="wrap">
        <h1>Ours Privacy Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('ours_privacy_settings');
            do_settings_sections('ours_privacy_settings');
            ?>
            <table class="form-table">
                <tr>
                    <th scope="row">Ours Privacy Token</th>
                    <td>
                        <input type="text" name="ours_privacy_token" 
                               value="<?php echo esc_attr(get_option('ours_privacy_token')); ?>" 
                               class="regular-text">
                        <p class="description">Enter your Ours Privacy token here.</p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

