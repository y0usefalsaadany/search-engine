<?php
ini_set('display_errors','off');
if(isset($_POST['send'])){
	$ip = "0.0.0.0";
	$port = 8000;
	$socket = socket_create(AF_INET,SOCK_STREAM,0);
	$conn = socket_connect($socket,$ip,$port) or die("sorry this server is not available");
	$clear_text ="";
	$data =$_POST['search'];
	socket_send($socket,$data,strlen($data),0);
	$line = socket_recv($socket, $response, 1024, MSG_WAITALL);
	echo $response;
}

