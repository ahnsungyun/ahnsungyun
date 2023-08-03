<?php
session_start();
$host="localhost";
$user="root";
$password="kevin030605@";
$database="dbname";

$conn = mysqli_connect($host, $user, $password, $database);
$sql = "DELETE FROM board WHERE num=".$_GET['id'];
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('deleted!'); location.replace('board.php');</script>";
}
echo "<script>alert('error!'); location.replace('board.php');</script>";
?>