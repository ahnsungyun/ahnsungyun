<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>CREATE</title>
</head>
<body>
    <form method="post" action="comment_update_action.php?id=<?php echo $_GET['num']?>">
        <?php
        session_start();
        $host="localhost";
        $user="root";
        $password="kevin030605@";
        $database="dbname";

        $conn = mysqli_connect($host, $user, $password, $database);
        $sql = "SELECT * FROM comment WHERE num = ".$_GET['num'];
        $result = mysqli_query($conn, $sql);
        $board = mysqli_fetch_array($result);
        if(!isset($_SESSION['username'])){
            echo "<script>alert('login first!'); location.replace('login.php')</script>";
        }
        ?>

        <h2>COMMENT UPDATE</h2>
        <div>
            <textarea name="contents" placeholder="contents" cols="30" rows="10"><?php echo $board['contents']?></textarea>
        </div>
        <button type="submit" class="btn" onclick="button()">UPDATE </button>
    </form>
</body>
</html>