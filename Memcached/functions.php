<head>
	<meta charset="utf8">
</head>
<?php
$m = new Memcached();
$m->addServer('localhost', 11211);
$m->setOption(Memcached::OPT_COMPRESSION, false);

$m->set('foo', 'abc');
$m->append('foo', 'def');
$m->append('foo', '缓存');
var_dump($m->get('foo'));

$m->setOption(Memcached::OPT_COMPRESSION, true);