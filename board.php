<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Board</title>
</head>
<body>
		<h1>K.knock Board</h1> <br>
        <div>
            <form action="search_action.php" method="get">
                <input type="text" name="search" size="40" requried="required" /> <button>search</button>
            </form>
        </div>
        <?php
            session_start();
            $host="localhost";
            $user="root";
            $password="kevin030605@";
            $database="dbname";
            $conn = mysqli_connect($host, $user, $password, $database);
            
            $sql = "SELECT * FROM board ORDER BY title ASC";
            $result = mysqli_query($conn,$sql);
            while($board = mysqli_fetch_array($result)){
                echo '<p><a href=\'topic.php?id='.$board['num'].' \'> '.$board['title']. '</a></p>';
            }
        ?>
        
        <button onclick="location.href='create.php'">Create</button><br>
        <button onclick="location.href='file.php'">File</button><br>
        <a href=logout.php>logout</a>
</body>
</html>
