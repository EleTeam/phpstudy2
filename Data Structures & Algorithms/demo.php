<?php 

require_once 'Engine/SortEngine.php';

use Algorithm\Engine\SortEngine;

$array = array(2, 1, 3);
$array = '213';

$sortEngine = new SortEngine();

echo '======== Bubble sort ========<br />';
echo 'Ascending<br />'; 
echo '<pre>';
$array = SortEngine::bubble($array);
print_r($array);
echo '</pre>';

echo 'Descending<br />';
echo '<pre>';
$array = SortEngine::bubble($array, false);
print_r($array);
echo '</pre><br />';