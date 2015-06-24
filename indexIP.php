<?php


$http_client_ip = $_SERVER['HTTP_CLIENT_IP']; //checks actual internet IP address (not indiviual computer)
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR']; //checking if user uses a proxy
$remote_addr = $_SERVER['REMOTE_ADDR'];

if (!empty($http_client_ip)) {
	$ip_address = $http_client_ip;
} else if (!empty($http_x_forwarded_for)) {
	$ip_address = $http_x_forwarded_for;
} else {
	$ip_address = $remote_addr;
}

echo $ip_address;

?>

