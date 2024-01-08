<?php
include("connect.php");

if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    // Perform validation (you can customize this based on your requirements)
    if (empty($nama) || empty($email) || empty($phone)) {
        header('Location: index.php?status=error');
        exit;
    }

    // Insert data into the database
    $sql = "INSERT INTO data_guru (nama, email, phone) VALUES ('$nama', '$email', '$phone')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header('Location: index.php?sukses=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} else {
    header('Location: index.php'); // Redirect if form not submitted
}