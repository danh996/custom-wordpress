<?php

/*
	Plugin Name: My Plugins
	Description: My First Plugin
	Version: 1.0
	Author: Danh996
	Author URI: https://danh996.com
*/ 

// add_filter('the_content', 'addToEndOfPost');

// function addToEndOfPost($content){
// 	if(is_single() && is_main_query()){
// 		return $content . 'My Name Is Danh';
// 	}

// 	return $content;
// }

class WordCountAndTimePlugin{
	function __construct(){
		add_action('admin_menu', array($this, 'adminPage'));
		add_action('admin_init', array($this, 'settings'));
	}

	function settings(){
		add_settings_section('wcp_first_section', null, null, 'word-count-setting-page');

		add_settings_field('wcp_location', 'Display location', array($this, 'locationHTML'), 'word-count-setting-page', 'wcp_first_section');

		register_setting('wordcountplugin', 'wcp_location', array('sanitize_callback' => 'sanitize_text_field', 'default' => '0'));
	}

	function locationHTML(){ ?>
		<select name="wcp_location">
			<option value="0">Begining of Post</option>
			<option value="1">End of Post</option>
		</select>
	<?php }

	function adminPage(){
		add_options_page(
			'Word Count Settings',
			'Word Count',
			'manage_options',
			'word-count-setting-page',
			array($this, 'ourHTML')
		);
	}

	function ourHTML(){ ?>
		<div class="wrap">
			<h1>Word Count Settings</h1>
			<form action="options.php" method="POST">
				<?php 
					settings_fields('wordcountplugin');
					do_settings_sections('word-count-setting-page');
					submit_button();
				?>
			</form>
		</div>
	<?php }
}

$wordCountAndTimePlugin = new WordCountAndTimePlugin();

