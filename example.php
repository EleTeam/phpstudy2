<?php
define("JAVA_HOSTS", "127.0.0.1:8080");

require_once("http://localhost:8080/JavaBridge/java/Java.inc");

// get instance of Java class java.lang.System in PHP
$system = new java('java.lang.System');

// demonstrate property access
echo 'Java version=' . $system->getProperty('java.version') . '<br />';
echo 'Java vendor=' . $system->getProperty('java.vendor') . '<br />';
echo 'OS=' . $system->getProperty('os.name') . ' ' .
		$system->getProperty('os.version') . ' on ' .
		$system->getProperty('os.arch') . ' <br />';

// java.util.Date example
$formatter = new Java('java.text.SimpleDateFormat',
		"EEEE, MMMM dd, yyyy 'at' h:mm:ss a zzzz");

echo $formatter->format(new Java('java.util.Date'));
?>
