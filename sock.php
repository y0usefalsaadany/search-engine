<?php
$host = "0.0.0.0";
$port = 8000;
ini_set('desplay_errors','off');
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
$bind = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");
$listen = socket_listen($socket, 1000) or die("Could not set up socket listener\n");
$accept = socket_accept($socket) or die("Could not accept incoming connection\n");
$response = socket_read($accept, 1024) or die("Could not read data\n");
$response = trim($response);
$response = strtolower($response);
echo "Client Message : ".$response;
switch($response){
	case "facebook":
		echo "facebook";
		break;
	case "google":
		echo "google";
		break;
}
//socket_write($accept, $output, strlen ($output)) or die("Could not write output\n");
//socket_close($socket);