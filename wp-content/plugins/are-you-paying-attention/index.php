<?php
/*
	Plugin Name: Are You Paying Attention
	Description: Are You Paying Attention Plugin
	Version: 1.0
	Author: Danh996
	Author URI: https://danh996.com
*/ 

if(! defined('ABSPATH')) exit;

class AreYouPayingAttension{
    function __construct(){
    	add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets(){
    	wp_enqueue_script('ournewblocktype', plugin_dir_url(__FILE__) . 'build/index.js', array('wp-blocks', 'wp-element'));
    }
}

$areaYouPayingAttention = new AreYouPayingAttension();