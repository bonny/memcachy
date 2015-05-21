<?php

/*
Plugin Name: Memcachy
Description: Memcache or Memcached backend for the WP Object Cache
Version: 0.1
Plugin URI: https://github.com/bonny/memcachy/
Author: Pär Thernström

Install the object-cache*-files this file to wp-content/
*/

// Detect Memcache(d) to use
// Try with MemcacheD first beacuse that's newer and cooler
if ( class_exists("Memcached") ) {

	include __DIR__ . "/object-cache-memcached.php";

} else if ( class_exists("Memcache") ) {
	
	// Memcache uses uses a slightly different config-format
	global $memcached_servers;	
	if ( is_array($memcached_servers) ) {
		$memcached_servers = array_map(function($val) {
			return implode(":", $val);
		}, $memcached_servers);
	}

	include __DIR__ . "/object-cache-memcache.php";

} else {

	add_action("admin_notices", function() {
		?><div class="updated"><p>A message from Memcachy: Neither Memcached or Memcache where found, so no object caching loaded.</p></div><?php
	});
	
}
