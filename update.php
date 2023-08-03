<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>CREATE</title>
</head>
<body>
    <form method="post" action="update_action.php?id=<?php echo $_GET['id']?>">
        <?php
        session_start();
        $host="localhost";
        $user="root";
        $password="kevin030605@";
        $database="dbname";

        $conn = mysqli_connect($host, $user, $password, $database);
        $sql = "SELECT * FROM board WHERE num = ".$_GET['id'];
        $result = mysqli_query($conn, $sql);
        $board = mysqli_fetch_array($result);
        if(!isset($_SESSION['username'])){
            echo "<script>alert('login first!'); location.replace('login.php')</script>";
        }
        ?>

        <h2>UPDATE</h2>
        <div>
            <input type="text" name="title" placeholder="title" value="<?php echo $board['title']?>">
        </div>
        <div>
            <textarea name="content" placeholder="content" cols="30" rows="10"><?php echo $board['content']?></textarea>
        </div>
        <button type="submit" class="btn" onclick="button()">UPDATE </button>
    </form>
</body>
</html>