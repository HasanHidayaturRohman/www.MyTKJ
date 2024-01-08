<?php
include("connect.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $sql = "UPDATE data_guru SET nama='$nama', email='$email', phone='$phone' WHERE id=$id";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header('Location: index.php?sukses=update');
    } else {
        header('Location: index.php?status=gagal');
    }
}