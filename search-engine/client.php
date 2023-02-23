<?php
ini_set('display_errors','off');
echo shell_exec("cls||clear");
while(true){
    $ip = "127.0.0.1";
    $port = 20000;
    $socket = socket_create(AF_INET,SOCK_STREAM,0);
    $conn = socket_connect($socket,$ip,$port); 
    $data = readline("Enter msg : \n");
    // $data = "i need data";
    socket_write($socket, $data, strlen($data));
    echo "[+] Client Request: ".$data ."\n";
    // $conn = socket_connect($socket,$ip,$port); 
    $response = socket_read($socket, 2000) or die("Could not read data\n");
    echo "Reply From Server  : $response\n";
}
    