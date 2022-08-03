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
	}

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
		<h1>Hello world from our new plugin</h1>
	<?php }
}

$wordCountAndTimePlugin = new WordCountAndTimePlugin();

