<?php
/*
Plugin Name: ShareThis (http://sharethis.com)
Plugin URI: http://github.com/andyhot/flatpress-plugins
Description: Adds ShareThis code to easily bookmark and share your page. Use [sharethis] in your post.
Author: Andreas Andreou.
Version: 1.0
Author URI: http://blog.andyhot.gr
*/ 

add_filter('init', 'plugin_bbcode_sharethis_tags');

function plugin_bbcode_sharethis_tags() {
	$bbcode =& plugin_bbcode_init();
	$bbcode->addCode( 'sharethis', 'callback_replace', 'plugin_custombbcode_sharethis',
		array('usecontent_param' => array ('default')),
		'inline', array ('listitem', 'block', 'inline', 'link'),
		array()
	);
	
	$bbcode->setCodeFlag ('sharethis', 'closetag', BBCODE_CLOSETAG_FORBIDDEN);
}
 
function plugin_custombbcode_sharethis($action, $attributes, $content, $params, &$node_object) {	
	$publisher_key = '7d4ebc5b-ef15-446a-8355-a9439ef2d94e';  
	
	if ($action == 'validate') {
		return true;
	}

	if ($attributes['default']) {
		$publisher_key = $attributes['default'];
	}	
	
	return '<script type="text/javascript" src="http://w.sharethis.com/button/sharethis.js#publisher='
		.$publisher_key.'&amp;type=website"></script>';
}
?>