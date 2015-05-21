
## Tagline

memcache or memcached autodetect object cache backend for wordpress

## Description

Memcachy is an object-cache for WordPress that auto-detects whether to use Memcached or Memcache.
Also uses same config format for both. Useful if you locally develop with memcached and then for some reason the staging or prod server uses memcache.

Uses code from https://github.com/tollmanz/wordpress-pecl-memcached-object-cache for the memcached part and from https://wordpress.org/plugins/memcached/ for the memcache part.

    $memcached_servers = array(
        array(
            '127.0.0.1',
            11211
        )
    );

## Installation

It's an object cache, not a plugin. You know what to do.

(Install the object-cache*-files to wp-content/.)

## Todo

- [x] Use same config format both both
- [x] Auto detect memcache or memcached

## Other code used

Memcached-class:
https://github.com/tollmanz/wordpress-pecl-memcached-object-cache

Memcache-class:
https://wordpress.org/plugins/memcached/

