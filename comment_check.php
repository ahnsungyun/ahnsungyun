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
$id = $_SESSION['username'];
$content = $_POST['content'];
$topic_num = $_POST['topic_num'];
$sql = "INSERT INTO comment(id,contents,topic_num) VALUES ('$id','$content',$topic_num);";

$result = mysqli_query($conn, $sql);
echo "<script>history.back()</script>";
?>