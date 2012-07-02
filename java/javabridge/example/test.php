<?php
define("JAVA_HOSTS", '127.0.0.1:8080');
define("JAVA_SERVLET", "/JavaBridge/servlet.phpjavabridge");
require_once("../Java.inc");
echo java("java.lang.System")->getProperties();

