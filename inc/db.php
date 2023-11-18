<?php
$host='localhost';
$user='hiwa';
$pass= '123';
$db='resttutorial';
$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
    die('connection is failed'.mysqli_connect_error());
}
?>