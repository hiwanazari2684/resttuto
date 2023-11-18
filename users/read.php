<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type:Application/json');
header('Access-Control-Allow-Method:GET');
header('Access-Control-Allow-Headers:Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');
$requestMethod=$_SERVER['REQUEST_METHOD'];
include('handlers.php');
if ($requestMethod=='GET') {
   $users=usersList();
   echo $users;

}
else {
    $data=[
        'status'=>405,
        'message'=> $requestMethod.'Method Not Allowed',
    ];
    echo json_encode($data);

}
?>