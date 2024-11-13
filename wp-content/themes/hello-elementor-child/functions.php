<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
       wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 30 );

// END ENQUEUE PARENT ACTION

function register_my_menus() {
    register_nav_menus(array(
        'menu-1' => __( 'Menu Principal' ),
    ));
}
add_action( 'init', 'register_my_menus' );
function ajouter_lien_admin_menu_principal( $items, $args ) {
    // Vérifier si c'est le menu principal
    if ( $args->theme_location == 'menu-1' ) {
        // Vérifier si l'utilisateur est connecté
        if ( is_user_logged_in() ) {
            // Générer le lien vers le tableau de bord
            $admin_link = '<li class="menu-item admin-link"><a href="' . admin_url() . '">Admin</a></li>';
            
            // Diviser les éléments du menu en tableau
            $items_array = explode('</li>', $items);

            // Insérer le lien "Admin" avant le dernier élément
            $last_index = count($items_array) - 2; // Dernier élément du tableau
            array_splice($items_array, $last_index, 0, $admin_link); // Insertion avant le dernier élément

            // Rejoindre les éléments du menu pour reformer la chaîne HTML
            $items = implode('</li>', $items_array);
        }
    }
    
    return $items;
}
add_filter( 'wp_nav_menu_items', 'ajouter_lien_admin_menu_principal', 10, 2 );