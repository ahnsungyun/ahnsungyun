<?php
session_start();
$host="localhost";
$user="root";
$password="kevin030605@";
$database="dbname";
$n_content=$_POST['contents'];

$conn = mysqli_connect($host, $user, $password, $database);
$sql = "UPDATE comment SET contents='$n_content' WHERE num=".$_GET['id'];
$sql1 = "SELECT topic_num from comment WHERE num=".$_GET['id'];
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$board = mysqli_fetch_array($result1);
if($result){
    echo "<script>alert('update!'); location.replace('topic.php?id={$board['topic_num']}');</script>";
}
echo "<script>alert('error!'); location.replace('topic.php?id={$board['topic_num']}');</script>";
?>