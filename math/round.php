<?php
// Examples
$val = 0;
round((float)$val, 2);
number_format((float)$val, 2);
number_format((float)$val, 2, '.', '');

echo 'Round number: 0 <br />';
$val = 0;
echo 'round(): ';
print_r(round((float)$val, 2));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2));
echo '<br /><br />';

echo 'Round number: -0 <br />';
$val = -0;
echo 'round(): ';
print_r(round((float)$val, 2));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2));
echo '<br /><br />';

echo 'Round number: 0.0 <br />';
$val = 0.0;
echo 'round(): ';
print_r(round((float)$val, 3));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2));
echo '<br /><br />';

echo 'Round number: 000.000 <br />';
$val = 0000.000;
echo 'round(): ';
print_r(round((float)$val, 3));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2));
echo '<br /><br />';

echo 'Round number: .1 <br />';
$val = .1;
echo 'round(): ';
print_r(round((float)$val, 3));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2));
echo '<br /><br />';

echo 'Round number: 0.1 <br />';
$val = 0.1;
echo 'round(): ';
print_r(round((float)$val, 3));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2));
echo '<br /><br />';

echo 'Round number: -0.1 <br />';
$val = -0.1;
echo 'round(): ';
print_r(round((float)$val, 3));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2));
echo '<br /><br />';

echo 'Round number: 123.123 <br />';
$val = 123.123;
echo 'round(): ';
print_r(round((float)$val, 3));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2));
echo '<br /><br />';

echo 'Round number: 999.999 <br />';
$val = 999.999;
echo 'round(): ';
print_r(round((float)$val, 3));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2, '.', ''));
echo '<br /><br />';

echo 'Round number: -99911.11999 <br />';
$val = -99911.11999;
echo 'round(): ';
print_r(round((float)$val, 3));
echo '<br />';
echo 'number_format(): ';
print_r(number_format((float)$val, 2, '.', ''));
echo '<br /><br />';
