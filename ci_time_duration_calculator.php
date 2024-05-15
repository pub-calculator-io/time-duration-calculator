<?php
/*
Plugin Name: CI Time duration calculator
Plugin URI: https://www.calculator.io/time-duration-calculator/
Description: Use our time duration calculator to determine how much time has passed between two events. It is perfect for tracking work time for your business.
Version: 1.0.0
Author: Time Duration Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_time_duration_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Time Duration Calculator by www.calculator.io";

function display_calcio_ci_time_duration_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Time Duration Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_time_duration_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_time_duration_calculator', 'display_calcio_ci_time_duration_calculator' );