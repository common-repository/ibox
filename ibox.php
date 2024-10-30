<?php
/*
Plugin Name: iBox
Plugin URI: http://labs.ibegin.com/ibox/
Description: Allows you to use rel="ibox" in your page as well as any additional iBox features detailed at http://labs.ibegin.com/ibox/
Author: David Cramer
Version: 1.02
Author URI: http://labs.ibegin.com/
*/

add_action('wp_head', 'iBox_Load');

function iBox_Load() {
    // some tricky stuff to get the path to this plugin since the installer doesn't want to keep its directory intact
    $dir = dirname(__FILE__);
    $pos = strpos($dir, '/wp-content');
    $path = get_option('siteurl') . substr($dir, $pos) . '/ibox/';
    echo '<script type="text/javascript" src="' . $path . 'ibox.js"></script>';
    echo '<script type="text/javascript">iBox.setPath("'.$path.'");</script>';
}

?>