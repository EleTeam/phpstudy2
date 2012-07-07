<?php
/**
 * Following are the requirements for an e-mail address, with relevant references:

    1. An e-mail address consists of local part and domain separated by an at sign (@) character (RFC 2822 3.4.1).

    2. The local part may consist of alphabetic and numeric characters, and the following characters: !, #, $, %, &, ', *, +, -, /, =, ?, ^, _, `, {, |, } and ~, possibly with dot separators (.), inside, but not at the start, end or next to another dot separator (RFC 2822 3.2.4).

    3. The local part may consist of a quoted string—that is, anything within quotes ("), including spaces (RFC 2822 3.2.5).

    4. Quoted pairs (such as \@) are valid components of a local part, though an obsolete form from RFC 822 (RFC 2822 4.4).

    5. The maximum length of a local part is 64 characters (RFC 2821 4.5.3.1).

    6. A domain consists of labels separated by dot separators (RFC1035 2.3.1).

    7. Domain labels start with an alphabetic character followed by zero or more alphabetic characters, numeric characters or the hyphen (-), ending with an alphabetic or numeric character (RFC 1035 2.3.1).

    8. The maximum length of a label is 63 characters (RFC 1035 2.3.1).

    9. The maximum length of a domain is 255 characters (RFC 2821 4.5.3.1).

    10. The domain must be fully qualified and resolvable to a type A or type MX DNS address record (RFC 2821 3.6). 
 
 *	An example: http://www.linuxjournal.com/article/9585
 */

function validateEmail($email, $checkDns = true)
{
	// Check one "@" symbol only and lengths
	$pattern = '/^(?P<local>[^@]{1,64})@(?P<domain>[^@]{1,255})$/'; 		
	if (!preg_match($pattern, $email, $matches)) {
		return false;
	}
	
	$local  = $matches['local'];
	$domain = $matches['domain'];
	
	// Check local part starts or ends with "." or has two consecutive dots
	if ($local[0] == '.' || substr($local, -1) == '.' ||
			preg_match('/\.\./', $local)) {
		return false;
	}
	
	// Check local part characters
	$pattern = '/^[A-Za-z0-9~`!#$%^&*-_=+|{}.]{1,63}$/';
	if (!preg_match($pattern, $local)) {
		return false;
	}	
	
	// Check domain part starts or ends with "." or has two consecutive dots
	if ($domain[0] == '.' || substr($domain, -1) == '.' ||
			preg_match('/\.\./', $domain)) {
		return false;
	}
	
	// Check domain part characters
	$pattern = '/^[A-Za-z0-9-.]{1,255}$/';
	if (!preg_match($pattern, $domain)) {
		return false;
	}
	
	// Check dns record
	if ($checkDns && !checkdnsrr($domain)) {
		return false;
	}
	
	return true;
}


/**
 * Validate email
 */
echo '<pre>';
echo '**************** Validate email****************<br />';	
$email = 'A-Za-z0-9~`!#$%^!#$%&*-_=+|{}hi.huazai@gmail.com';
var_dump(validateEmail($email));
