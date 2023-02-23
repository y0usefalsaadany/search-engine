<?php 
echo shell_exec("cls||clear");
$host = "127.0.0.1";
$port = 20000;
ini_set('desplay_errors','off');
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
$bind = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");
$error = "error";

while(true){
    $listen = socket_listen($socket, 1000) or die("Could not set up socket listener\n");
    $data = readline("Enter msg : \n");
    $accept = socket_accept($socket) or die("Could not accept incoming connection\n");
    $response = socket_read($accept, 1054) or die("Could not read data\n");
    $response = trim($response);
    $response = strtolower($response);
    echo "[+] Client Request: ".$response ."\n";
    socket_write($accept, $data , strlen($data )) or die("Could not write output\n");
}
