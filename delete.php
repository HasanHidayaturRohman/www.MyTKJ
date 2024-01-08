<?php
include("connect.php"); // Include your database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Create a query to delete data based on the ID
    $sql = "DELETE FROM data_guru WHERE id = $id";

    // Execute the query
    $query = mysqli_query($con, $sql);

    if ($query) {
        header('Location: index.php?delete_success=true'); // Redirect after successful deletion
    } else {
        header('Location: index.php?delete_error=true'); // Redirect if deletion fails
    }
} else {
    die('Access denied...');
}
?>
