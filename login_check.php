<?php
session_start();
$id = $_POST['id'];
$pw = $_POST['pw'];
$host = "localhost";
$user = "root";
$password = "kevin030605@";
$database = "dbname";
$conn = mysqli_connect($host, $user, $password, $database);

$sql = "SELECT * FROM tbname WHERE id = '$id' and pw = '$pw'";
echo "<script>alert($sql);</script>";
$result = mysqli_query($conn, $sql);
if($row = mysqli_fetch_array($result)){
    $_SESSION['username'] = $row['id'];
    echo "<script>location.replace('main.php');</script>";
} else{
    echo "<script> alert('Invalid id or password'); location.href=\"login.php\"; </script>";
}
?>


