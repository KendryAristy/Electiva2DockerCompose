<!-- src/index.php -->

<?php
$host = 'mysql';
$user = 'my_user';
$password= 'password';
$database = 'dbl';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL successfully!";
$conn->close();
?>