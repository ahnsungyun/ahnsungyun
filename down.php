<?php
    session_start();
    $host="localhost";
    $user="root";
    $password="kevin030605@";
    $database="dbname";
    $conn = mysqli_connect($host, $user, $password, $database);
            
    $sql = "SELECT * FROM file where num=".$_GET['num'];
    $result = mysqli_query($conn,$sql);
    $board = mysqli_fetch_array($result);

    $target_Dir = "/var/www/html/file_download";
    $file = $board['file_name'];
    $down = "/var/www/html/file_download/$file";
    $filesize = filesize($down);
    
    if(file_exists($down)){
        header("Content-Type:application/octet-stream");
        header("Content-Disposition:attachment;filename=$file");
        header("Content-Transfer-Encoding:binary");
        header("Content-Length:".filesize($down));
        header("Cache-Control:cache,must-revalidate");
        header("Pragma:no-cache");
        header("Expires:0");
        if(is_file($down)){
            $fp = fopen($down,"r");
            while(!feof($fp)){
            $buf = fread($fp,8096);
            $read = strlen($buf);
            print($buf);
            flush();
            }
            fclose($fp);
        }
    } else{
        ?><script>alert("Not exist file")</script><?
    }
?>