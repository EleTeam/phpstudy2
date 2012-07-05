<?php 

require_once 'Algorithm/Engine/SortEngine.php';

use Algorithm\Engine\SortEngine;

$array = array(0, 3, 2, 4, 1);
$array = '873457560132413678310967823129605';
// $array = array('c', 'b', 'd', 'a');
// $array = 'cbda';

echo '======== Bubble sort ========<br />';
echo 'Ascending<br />'; 
echo '<pre>';
$sortedArray = SortEngine::bubble($array);
print_r($sortedArray);
echo '</pre>';

echo 'Descending<br />';
echo '<pre>';
$sortedArray = SortEngine::bubble($array, false);
print_r($sortedArray);
echo '</pre><br />';

echo '======== Selection sort ========<br />';
echo 'Ascending<br />';
echo '<pre>';
$sortedArray = SortEngine::selection($array);
print_r($sortedArray);
echo '</pre>';

echo 'Descending<br />';
echo '<pre>';
$sortedArray = SortEngine::selection($array, false);
print_r($sortedArray);
echo '</pre><br />';

echo '======== Insertion sort ========<br />';
echo 'Ascending<br />';
echo '<pre>';
$sortedArray = SortEngine::insertion($array);
print_r($sortedArray);
echo '</pre>';

echo 'Descending<br />';
echo '<pre>';
$sortedArray = SortEngine::insertion($array, false);
print_r($sortedArray);
echo '</pre><br />';