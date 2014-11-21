<?php
class Flexible_Registrations
{
    
    /**
     * Plugin version, used for cache-busting of style and script file references.
     *
     * @since 1.0.0
     *
     * @var string
     */
    protected $version = FRS_VERSION;

    /**
     * The plugin options.
     *
     * @since 1.0.0
     *
     * @var null
     */
    protected $option = null;

    /**
     * Holds any plugin error messages.
     *
     * @since 1.0.0
     *
     * @var array
     */
    protected $errors = array();

    /**
     * Initialize the plugin class object.
     *
     * @since 1.0.0
     */
    public function __construct()
    {

        // Load the plugin.
        add_action( 'init', array( $this, 'init' ) );

    }
    
    /**
     * Fired when the plugin is activated.
     *
     * @since 1.0.0
     *
     * @param boolean $network_wide True if WPMU superadmin uses "Network Activate" action, false if WPMU is disabled or plugin is activated on an individual blog.
     */
    public static function activate( $network_wide ) {



    }

    /**
     * Fired when the plugin is deactivated.
     *
     * @since 1.0.0
     *
     * @param boolean $network_wide True if WPMU superadmin uses "Network Deactivate" action, false if WPMU is disabled or plugin is deactivated on an individual blog.
     */
    public static function deactivate( $network_wide ) {



    }

    /**
     * Fired when the plugin is uninstalled.
     *
     * @since 1.0.0
     *
     * @param boolean $network_wide True if WPMU superadmin uses "Network Deactivate" action, false if WPMU is disabled or plugin is deactivated on an individual blog.
     */
    public static function uninstall( $network_wide ) {



    }

    /**
     * Loads the plugin.
     *
     * @since 1.0.6
     */
    public function init() {
        
        // Add the options page and menu item.
        add_action( 'admin_menu', array( $this, 'add_plugin_admin_menu' ) );
        
	    /*
// Go ahead and set the option property.
        $this->option = get_option( 'fsb_global_option' );

        // Load the plugin settings link shortcut.
        add_filter( 'plugin_action_links_' . plugin_basename( plugin_dir_path( __FILE__ ) . 'floating-social-bar.php' ), array( $this, 'settings_link' ) );

        // Add the options page and menu item.
        add_action( 'admin_menu', array( $this, 'add_plugin_admin_menu' ) );

        // Add the shortcode for outputting the social bar.
        add_shortcode( 'fsb-social-bar', array( $this, 'shortcode' ) );

        // Filter the content to add in our floating social bar.
        add_action( 'pre_get_posts', array( $this, 'maybe_do_social_bar' ) );
*/

    }

    /**
     * Add Settings page to plugin action links in the Plugins table.
     *
     * @since 1.0.0
     *
     * @param array $links Default plugin action links.
     * @return array $links Amended plugin action links.
     */
    public function settings_link( $links ) {

        /*
$setting_link = sprintf( '<a href="%s">%s</a>', add_query_arg( array( 'page' => 'floating-social-bar' ), admin_url( 'options-general.php' ) ), __( 'Settings', 'fsb' ) );
        array_unshift( $links, $setting_link );

        return $links;
*/

    }

    /**
     * Register the administration menu for this plugin into the WordPress Dashboard menu.
     *
     * @since 1.0.0
     */
    public function add_plugin_admin_menu() {
        
        add_menu_page(
            __( 'Registrations' ),
            __( 'Registrations' ),
            'manage_options',
            'flexible_registrations',
            array( $this, 'display_registrations_page' ),
            '',
            30
        );
        
        add_submenu_page(
            'flexible_registrations',
            __( 'Options' ),
            __( 'Options' ),
            'manage_options',
            'flexible_registrations_options',
            array( $this, 'display_plugin_options_page' )
        );
        
        
    }
    
    /**
     * Render the settings page for this plugin.
     *
     * @since 1.0.0
     */
    public function display_registrations_page()
    {
    	
    	if(!current_user_can('manage_options')) {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }
        
        // Render the settings template
        include( sprintf("%s/ui/registrations.php",FRS_ABSPATH) );
    
    }
    
    /**
     * Render the settings page for this plugin.
     *
     * @since 1.0.0
     */
    public function display_plugin_options_page()
    {
    	
    	if(!current_user_can('manage_options')) {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }
        
        // Render the settings template
        include( sprintf("%s/ui/plugin_options.php",FRS_ABSPATH) );
    
    }

    /**
     * Loads assets only on this plugin's administration dashboard.
     *
     * @since 1.0.0
     */
    public function load_plugin_assets() {

        

    }

}
?>