<?php
session_start();
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "my_tkj";

// Create connection
$con = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['signup'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    
    // Hash password menggunakan password_hash
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Registration successful. You can now <a href='index.php'>login</a>.";
    } else {
        echo "Registration failed: " . mysqli_error($con);
    }
}
?>
