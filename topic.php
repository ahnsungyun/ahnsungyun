<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>topic <?php $_GET['id'] ?></title>
</head>
<body>
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
        echo '<h1> '.$board['title'].' </h1> <h2> '.$board['name'].' </h2> <h3> '.$board['content'].' </h3>';
        if($board['name'] == $_SESSION['username'])
        {
            echo "<button onclick=\"location.href='delete.php?id=".$_GET['id']."'\">DELETE</butoon>";
            echo "<button onclick=\"location.href='update.php?id=".$_GET['id']."'\">UPDATE</butoon>";
        }
    ?>
    <br>
    <button onclick="location.href='board.php'">Go Back</button>
    <br> <br>
    
    
    <form method="post" action="comment_check.php"> 
        <input type='hidden' name='topic_num' value=<?php echo $_GET['id']?>>
        <?php
        session_start();
        if(!isset($_SESSION['username'])){
            echo "<script>alert('login first!'); location.replace('login.php')</script>";
        }
        ?>
        <div>
        <textarea name="content" placeholder="content" cols="30" rows="1"></textarea>
        </div>
        <button type="submit" class="btn" onclick="button()">comment </button>
    </form>
    <?php
            session_start();
            $host="localhost";
            $user="root";
            $password="kevin030605@";
            $database="dbname";
            $conn = mysqli_connect($host, $user, $password, $database);
            
            $sql = "SELECT * FROM comment where topic_num = {$_GET['id']}";
            $result = mysqli_query($conn,$sql);
            while($board = mysqli_fetch_array($result)){
                echo "<hr><p>{$board[1]}<br>{$board[2]}</p>";
                if($board[1] == $_SESSION['username'])
                {
                    echo "<button onclick=\"location.href='comment_update.php?num={$board[0]}'\">update </button>";
                    echo "<button onclick=\"location.href='comment_delete.php?num={$board[0]}'\">delete </button>";
                }
            }
        ?>
</body>
</html>
