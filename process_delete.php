<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM data_guru WHERE id = $id";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header('Location: index.php?sukses=deleted');
    } else {
        header('Location: index.php?status=error');
    }
} else {
    header('Location: index.php');
}