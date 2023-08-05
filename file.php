<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>File</title>
</head>
<body>
    <h1>File Upload/Download Page</h1> <br>

    <?php
        session_start();
        $host="localhost";
        $user="root";
        $password="kevin030605@";
        $database="dbname";
        $conn = mysqli_connect($host, $user, $password, $database);
            
        $sql = "SELECT * FROM file ORDER BY file_name ASC";
        $result = mysqli_query($conn,$sql);
        while($board = mysqli_fetch_array($result)){
            echo '<p><a href=\'down.php?num='.$board['num'].' \'> '.$board['file_name']. '</a></p>';
}
        }
    ?>

    <form method="post" action="file_check.php" enctype="multipart/form-data">
        <div>
        <p><input class=file id="input-file" type=file name=file></p>
        </div>
        <button type="submit" class="btn" onclick="button()">UPLOAD</button>
    </form>

    <br>
    <button onclick="location.href='board.php'">Go Back</button>
    
</body>
</html>



