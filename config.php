<?php


// Override any of the default settings below:

$config['site_title'] = 'OLA';			// Site title
$config['base_url'] = ''; 				// Override base URL (e.g. http://example.com)
$config['theme'] = 'ola'; 			// Set the theme (defaults to "default")
$config['date_format'] = 'jS M Y';		// Set the PHP date format
$config['twig_config'] = array(			// Twig settings
	'cache' => false,					// To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => false					// Enable Twig debug
);
$config['pages_order_by'] = 'placing';	// Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';			// Order pages "asc" or "desc"
$config['excerpt_length'] = 50;			// The pages excerpt length (in words)

// To add a custom config setting:

//$config['custom_setting'] = 'Hello'; 	// Can be accessed by {{ config.custom_setting }} in a theme
$config['at_navigation']['class'] = 'nav';
$config['at_navigation']['exclude']['single'] = array('index');
// $config['at_navigation']['exclude']['folder'] = array('');
