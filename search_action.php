<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>SEARCH</title>
</head>
<body>
    <h1>SEARCH</h1> <br>
    <div>
        <form action="search_action.php" method="get">
            <textarea name="search" placeholder="search_content" cols="30" rows="1"><?php echo $_GET['search']?></textarea>
            <button type="submit" class="btn" onclick="button()">SEARCH </button>
        </form>
    </div>
    <?php
    session_start();
    $host="localhost";
    $username="root";
    $password="kevin030605@";
    $database="dbname";

    $conn = mysqli_connect($host,$username,$password,$database);
    $sql = "SELECT title,num FROM board where title LIKE '%{$_GET['search']}%' ORDER BY title ASC";
    $result = mysqli_query($conn,$sql);
    while($board = mysqli_fetch_array($result)){
        echo '<p><a href=\'topic.php?id='.$board['num'].' \'> '.$board['title']. '</a></p>';
    }
    ?>
    <button onclick="location.replace('board.php');">GO HOME</button>
</body>
</html>
