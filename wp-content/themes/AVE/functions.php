<?php

/**
 * The Liquid Themes Ave Theme
 *
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Text Domain: 'ave'
 * Domain Path: /languages/
 */
update_option( 'ave_purchase_code', 'activated' );
update_option( 'ave_purchase_code_status', 'valid' );
// Starting The Engine / Load the Liquid Framework ----------------
include_once( get_template_directory() . '/liquid/liquid-init.php' );