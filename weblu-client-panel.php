<?php
/**
 * Plugin Name: Weblu Client Panel
 * Description: Custom panel for Weblu clients. Displays user's services and info in branded UI.
 * Version: 0.1.0
 * Author: Blitzshadow
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Weblu_Client_Panel {

    public function __construct() {
        add_shortcode('weblu_client_panel', array($this, 'render_panel'));
        add_action('init', array($this, 'add_panel_endpoint'));
        add_action('template_redirect', array($this, 'handle_panel_endpoint'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));
    }

    public function enqueue_assets() {
        wp_enqueue_style('weblu-client-panel', plugin_dir_url(__FILE__) . 'assets/weblu-client-panel.css');
    }

    public function add_panel_endpoint() {
        add_rewrite_endpoint('panel', EP_ROOT | EP_PAGES);
    }

    public function handle_panel_endpoint() {
        global $wp_query;
        if (isset($wp_query->query_vars['panel'])) {
            if (is_user_logged_in()) {
                status_header(200);
                echo do_shortcode('[weblu_client_panel]');
                exit;
            } else {
                wp_redirect(wp_login_url(home_url('/panel')));
                exit;
            }
        }
    }

    public function render_panel() {
        $current_user = wp_get_current_user();
        ob_start();
        ?>
        <div class="weblu-client-panel">
            <div class="weblu-panel-header">
                <img src="<?php echo plugin_dir_url(__FILE__); ?>assets/weblu-logo.png" alt="Weblu Logo" class="weblu-logo" />
                <h1>Witaj, <?php echo esc_html($current_user->display_name); ?>!</h1>
            </div>
            <div class="weblu-panel-body">
                <p>Tu pojawią się Twoje usługi.</p>
                <ul class="weblu-services-list">
                    <!-- TODO: Dynamiczne ładowanie usług użytkownika -->
                    <li>(Przykładowa usługa) Hosting WordPress</li>
                    <li>(Przykładowa usługa) Strona firmowa</li>
                </ul>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}

new Weblu_Client_Panel();
