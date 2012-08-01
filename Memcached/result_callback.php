<?php
// Example 1
$m = new Memcached();
$m->addServer('localhost', 11211);
$items = array(
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
);
$m->setMulti($items);
$m->getDelayed(array('key1', 'key3'), true, 'result_cb');

function result_cb($memc, $item)
{
	echo '<pre>';
	print_r($memc);
    print_r($item);
    echo '/////////';
}

echo '<br />';
echo $m->get('key1');

// Example 2
class foo {
	private $M = false;

	public function __construct() {
		$this->M = new Memcached();
		$this->M->addServer('localhost', 11211);
		$this->M->set('a', 'test');
	}

	public function test() {
		$this->M->getDelayed(array('a'), false, array($this, 'fun'));
	}

	public function fun() {
		echo "Great Success!";
	}
}

$f = new foo();
echo '<br />';
$f->test();

// Example 3
class foo3 {
	public $M = false;

	public function __construct() {
		$this->M = new Memcached();
		$this->M->addServer('localhost', 11211);
		$this->M->set('a', 'test');
	}

	public function fun() {
		echo "Great Success!";
	}
}

$f = new foo3();
echo '<br />';
$f->M->getDelayed(array('a'), false, array($f, 'fun'));