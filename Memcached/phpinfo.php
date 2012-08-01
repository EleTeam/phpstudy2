<?php 
$memcached = new Memcached;
$memcached->addServer('localhost', 11211);
$info = $memcached->get('key');
print_r($info);

phpinfo();