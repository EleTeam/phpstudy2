<head>
	<meta charset="utf8">
</head>

<?php
// Memcached code and message
const MEMCACHED_CODE_SUCCESS 	= 0;
const MEMCACHED_CODE_NOT_FOUND 	= 16;


$m = new Memcached();
$m->addServer('localhost', 11211);

$m->get('lang1');
if ($m->getResultCode() == MEMCACHED_CODE_NOT_FOUND) {
	$lang = include 'lang.php';
	$m->setMulti($lang);
	echo 'init...';
	print_r($lang);
	echo '<br />';
} 
print_r($m->get('lang1'));
print_r($m->get('lang2'));
print_r($m->getMulti(array('lang1', 'lang2')));

echo '<br />ok';
print_r($m->getResultCode());
print_r($m->getResultMessage());
// $m->flush();