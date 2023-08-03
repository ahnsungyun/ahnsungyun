<?php
var_dump($_POST);
$id=$_POST['id'];
$pw=$_POST['pw'];

$host="localhost";
$username="root";
$password="kevin030605@";
$database="dbname";

echo "oh my..";
$conn = mysqli_connect($host,$username,$password,$database);
echo "god..";
$insert_query = "insert into tbname(id,pw) values('$id','$pw')";
$result= mysqli_query($conn,$insert_query);
if($result)
{
	echo "<script> alert('Success to Sign Up'); location.href=\"login.php\"; </script>";
} 
else {
	echo "<script> alert('Fail to Sign Up\nTry again'); location.href=\"signup.php\"; </script>";
}
?>

