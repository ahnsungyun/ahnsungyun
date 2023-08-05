<?php
session_start();
$uploads_dir = './file_download';
$allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

$error = $_FILES['file']['error'];
$name = $_FILES['file']['name'];
$ext = strtolower(pathinfo($name, PATHINFO_EXTENSION)); // Step 1: Convert extension to lowercase

if ($error !== UPLOAD_ERR_OK) {
    switch ($error) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            echo "Too big file. ($error)";
            break;
        case UPLOAD_ERR_NO_FILE:
            echo "No file. ($error)";
            break;
        default:
            echo "Not uploaded. ($error)";
    }
    exit;
}

if (!in_array($ext, $allowed_ext)) {
    echo "Extension not allowed.";
    exit;
}
// Add a random value to the filename
$random_value = mt_rand(1000, 9999); // Generate a random number between 1000 and 9999
$new_name = $randomvalue . '' . $name; // Combine random value with the original filename
move_uploaded_file($_FILES['file']['tmp_name'], "$uploads_dir/$name");

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Login first!'); location.replace('login.php');</script>";
    exit;
}

$host = "localhost";
$user = "root";
$password = "kevin030605@";
$database = "dbname";

$conn = mysqli_connect($host, $user, $password, $database);

$file_name = $name;
$file_address = md5($name);
$user_name = $_SESSION['username'];

$sql = "INSERT INTO file (file_name, file_address, user_name) VALUES ('$file_name', '$file_address', '$user_name')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error inserting data into database: " . mysqli_error($conn);
    exit;
}

echo "<script>alert('Upload Complete!'); location.replace('file.php');</script>";
?>
