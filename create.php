<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>CREATE</title>
</head>
<body>
    <form method="post" action="create_check.php">
        <?php
        session_start();
        if(!isset($_SESSION['username'])){
            echo "<script>alert('login first!'); location.replace('login.php')</script>";
        }
        ?>
        <h2>CREATE</h2>
        <div>
            <input type="text" name="title" placeholder="title">
        </div>
        <div>
            <textarea name="content" placeholder="content" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn" onclick="button()">CREATE </button>
        
    </form>
</body>
</html>