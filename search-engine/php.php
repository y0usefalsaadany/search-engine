<?php 
$host    = "127.0.0.1";
$port    = 20000;
$message = "Hello Server";
echo "Message To server :".$message;
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if(!is_resource($socket)) onSocketFailure("Failed to create socket");


?>
