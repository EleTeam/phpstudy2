<?php
$m = new Memcached();
$m->addServer('localhost', 11211);

$user_id = '';
$profile_info = $m->get('user:'.$user_id, 'user_info_cb');

function user_info_cb($memc, $key, &$value)
{
    $user_id = substr($key, 5);
    /* lookup profile info in the DB */
    /* ... */
    $value = 'profile_info';
    return true;
}

echo $profile_info;
echo $m->get('user:1');