<?php
session_start();
if(!isset($_SESSION['username'])){
    echo "<script>alert('login first!'); location.replace('login.php')</script>";
}
$host="localhost";
$user="root";
$password="kevin030605@";
$database="dbname";

$conn = mysqli_connect($host, $user, $password, $database);
$title = $_POST['title'];
$content = $_POST['content'];
$sql = "INSERT INTO board(title,content,name) VALUES ('$title','$content','{$_SESSION['username']}');";

$result = mysqli_query($conn, $sql);
echo "<script>location.replace('board.php')</script>";

?>
