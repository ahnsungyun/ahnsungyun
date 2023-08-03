<?php
session_start();
if(!isset($_SESSION['username']))
{
	header ('Location: ./login.php');
}

echo "<script>location.replace('board.php');</script>";

?>
