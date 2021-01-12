<?php

/*
Plugin Name: FCP Yoast FAQ Toggleable
The plugin adds styles and javascript to make the Yoast's FAQ block toggleable / foldable / accordion
Version: 1.0.0
Requires at least: 5.0.0
Requires PHP: 7.0.0
Author: Firmcatalyst, Vadim Volkov
Author URI: https://firmcatalyst.com
License: GPL v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

class FCPYoastFAQToggle {

    public function __construct() {

		wp_enqueue_style( 'fcp-yft', plugins_url( 'style.css', __FILE__ ), [], '1.0.0' );
		wp_enqueue_script( "fcp-yft", plugins_url( "base.js", __FILE__ ), ['jquery'], '1.0.1' );        

	}

}

new FCPYoastFAQToggle();
