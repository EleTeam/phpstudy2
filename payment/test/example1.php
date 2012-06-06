<?php
require_once '../JavaBridge/META-INF/java/Java.inc';

$System = java("java.lang.System");
echo $System->getProperties();