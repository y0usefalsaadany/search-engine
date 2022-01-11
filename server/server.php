<?php
$host = "127.0.0.1";
$port = 20000;
ini_set('desplay_errors','off');
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
$bind = socket_bind($socket, $host, $port) or die("Could not bind to socket\n");
$error = "error";
$banner = "

░██████╗███████╗██████╗░██╗░░░██╗███████╗██████╗░
██╔════╝██╔════╝██╔══██╗██║░░░██║██╔════╝██╔══██╗
╚█████╗░█████╗░░██████╔╝╚██╗░██╔╝█████╗░░██████╔╝
░╚═══██╗██╔══╝░░██╔══██╗░╚████╔╝░██╔══╝░░██╔══██╗
██████╔╝███████╗██║░░██║░░╚██╔╝░░███████╗██║░░██║
╚═════╝░╚══════╝╚═╝░░╚═╝░░░╚═╝░░░╚══════╝╚═╝░░╚═╝
";
echo $banner;
echo "------------------------- \n";
echo "[+] server is running [+]\n";
echo "------------------------- \n";
echo "[+] wait until client send data \n";
$listen = socket_listen($socket, 1000) or die("Could not set up socket listener\n");
$accept = socket_accept($socket) or die("Could not accept incoming connection\n");
$response = socket_read($accept, 1054) or die("Could not read data\n");
$response = trim($response);
$response = strtolower($response);
echo "[+] Client Request: ".$response ."\n";
if(strpos($response,'.')){
    $conn = mysqli_connect('localhost','root','','dns');
    $sql = "SELECT `ip`,`domain` FROM `websites` WHERE `domain`='$response' ";
    $query = mysqli_query($conn, $sql);
    foreach ($query as $value) {
            $domain = $value['domain'];
            socket_write($accept, $domain , strlen($domain )) or socket_write($accept, $error , strlen($error ));
    }
}else{
    socket_write($accept, $error , strlen($error )) or die("Could not write output\n");
}
