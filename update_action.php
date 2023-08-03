<?php
session_start();
$host="localhost";
$user="root";
$password="kevin030605@";
$database="dbname";
$n_title=$_POST['title'];
$n_content=$_POST['content'];

$conn = mysqli_connect($host, $user, $password, $database);
$sql = "UPDATE board SET title='$n_title' , content='$n_content' WHERE num=".$_GET['id'];
$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('update!'); location.replace('topic.php?id={$_GET['id']}');</script>";
}
echo "<script>alert('error!'); location.replace('topic.php?id={$_GET['id']}');</script>";
?>