<?php
require('../inc/db.php');

function usersList() {
    global $conn;
    $query='select * from users';
    $result=mysqli_query($conn,$query);
    if($result){
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
            $data=[
                'status'=> 200,
                'data'=>$row
            ];
            header('http/1.0 200 ok ');
            return json_encode($data);
        }
        else{
            $data=[
                'status'=> 400,
                'message'=>'No User found'
            ];
            header('http/1.0 400 ok ');
            return json_encode($data);
        }
    }
    else{
        $data=[
            'status'=> 500,
            'message'=>'Internal Server Error'
        ];
        header('http/1.0 500 ok ');
        return json_encode($data);
    }
}
?>