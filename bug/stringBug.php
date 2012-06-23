<?php
/**
 * Test at PHP version: PHP Version 5.3.8-ZS5.5.0
 */

/* Use substr() instead of rtrim() which has a bug
 *	<code>
 *		rtrim('TestttCon', 'Con')   == "Testtt"		// Valid
 *		rtrim('TestttCont', 'Cont') == "Tes"		// Invalid
 *		substr('TestttCont', 0, strlen('TestttCont') - strlen('Cont')) == "Testtt" // Valid
 * 	</code>
 */