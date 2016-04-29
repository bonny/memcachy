

*memcache or memcached autodetect object cache backend for wordpress*

## Description

Memcachy is an object-cache for WordPress that auto-detects whether to use Memcached or Memcache.
Also uses same config format for both. Useful if you locally develop with memcached and then for some reason the staging or prod server uses memcache.

Uses code from https://github.com/tollmanz/wordpress-pecl-memcached-object-cache for the memcached part and from https://wordpress.org/plugins/memcached/ for the memcache part.

## Installation

It's an object cache, not a plugin. You know what to do.

(Install the object-cache*-files to wp-content/.)

## Configuration

If your memcached server is running on localhost/127.0.0.1 and port 11211 then you don't need any config at all. Hooray!

If your server is on another server/ip number then add a snippet like this to your `wp-config.php`:

```php
$memcached_servers = array(
    array(
        '127.0.0.1',
        11211
    )
);
```

## History

- 29 april 2016: Update Memcached Object Cache to version 3
- 2015: First version


## Todo

- [x] Use same config format both both
- [x] Auto detect memcache or memcached


## Other code used/attributions/credits

This is actually just a "wrapper" for these excellent plugins:

Memcached object cache by [tollmanz](https://profiles.wordpress.org/tollmanz):
https://github.com/tollmanz/wordpress-pecl-memcached-object-cache

Memcache object cache by [ryan](https://profiles.wordpress.org/ryan/) and [sivel](https://profiles.wordpress.org/sivel/):
https://wordpress.org/plugins/memcached/

