<?php
session_start();
$host="localhost";
$user="root";
$password="kevin030605@";
$database="dbname";

$conn = mysqli_connect($host, $user, $password, $database);
$sql = "DELETE FROM comment WHERE num=".$_GET['num'];
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('deleted!'); history.back()</script>";
}
echo "<script>alert('error!'); history.back()</script>";
?>