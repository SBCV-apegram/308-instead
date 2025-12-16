<?php
  /*
Plugin Name: 308 Instead
Plugin URI: https://github.com/SBCV-apegram/308-instead
Description: Send a 308 (permanent) redirect instead of 301 (permanent) to preserve the HTTP method of the original request
Version: 1.0
Author: SBCV-apegram
Author URI: https://github.com/SBCV-apegram/308-instead
  */

yourls_add_action('pre_redirect','temp_instead_function');
function temp_instead_function($args) {
  $url  = $args[0];
  $code = $args[1];
  if ($code != 308) {
    // Redirect with 302 instead
    yourls_redirect($url,308);
    die();
  }
}
