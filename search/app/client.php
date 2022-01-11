<?php
ini_set('display_errors','off');
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $ip = "127.0.0.1";
    $port = 20000;
    $socket = socket_create(AF_INET,SOCK_STREAM,0);
    $conn = socket_connect($socket,$ip,$port); 
    if (!$conn){
        require "../views/error/servererror.php";
    }else {
        $data = htmlspecialchars($_POST['search']);
        socket_send($socket,$data,strlen($data),0);
        $line = socket_recv($socket, $response, 1054, MSG_WAITALL);
        switch ($response) {
            case 'error':
                require "../views/error/404notfound.php";
                break;
            
            default:
                header("location: ../views/website/".$response.".php");
                break;
        }
    }
    
}else {
    echo "forbidden";
}



