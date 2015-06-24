<?php

require 'grabIP.php';

foreach($ip_blocked as $ip) {
	if ($ip==$ip_address) {
		die("Your IP adddres, ".$ip_address." has been blocked.");
	}
}

?>

<h1> Welcome! </h1>