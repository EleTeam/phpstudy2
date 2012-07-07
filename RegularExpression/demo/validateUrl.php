<?php
echo '<pre>';
/**
 * Working with URL
 */
echo '<br />************ Working with URL **************<br />';
$url = 'http://www.php.net/index.html';
// Get host name
$pattern = '#^(?:http://)?([^/]+)#i';
preg_match($pattern, $url, $matches);
$host = $matches[1];
echo "Host name is: $host <br />";

// Get domain name
$pattern = '/[^.]+\.[^.]+$/';
preg_match($pattern, $host, $matches);
echo "Domain name is: {$matches[0]} <br />";

// Get last part
$pattern = '/[^\/]*$/';
preg_match($pattern, $url, $matches);
echo "Last part is: {$matches[0]} <br />";

// Using named subpattern
$pattern = '#^(?P<protocol>http)?(?:://)?(?P<host>[^/]+)#i';
preg_match($pattern, $url, $matches);
print_r($matches);



