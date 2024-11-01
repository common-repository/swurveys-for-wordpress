<?php
/*
 * Plugin Name: Swurveys for Wordpress
 * Version: 1.0
 * Plugin URI: http://www.swurveys.com/
 * Description: Swurveys for Wordpress. If you copy a Swurveys URL into a wordpress page or post it will automatically be embedded.
 * Author: Preston Tamkin
 * License: GPL2
 *
 *
 * @package WordPress
 * @author Preston Tamkin
 * @since 1.0.0
 */


wp_oembed_add_provider( 'http://swurv.in/*', 'http://app.swurveys.com/api/embed' );
wp_oembed_add_provider( 'https://app.swurveys.com/api/swurveys/*/opengraph', 'http://app.swurveys.com/api/embed' );
