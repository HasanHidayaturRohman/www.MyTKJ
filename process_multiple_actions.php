<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['selected']) && is_array($_POST['selected'])) {
        $action = $_POST['action'];

        foreach ($_POST['selected'] as $selectedId) {
            // Perform the selected action based on $action and $selectedId
            if ($action === 'delete') {
                // Delete the row with $selectedId
                $sql = "DELETE FROM data_guru WHERE id = $selectedId";
                mysqli_query($con, $sql);
            } elseif ($action === 'edit') {
                // Redirect to the edit page for $selectedId
                header("Location: edit.php?id=$selectedId");
                exit(); // Stop script execution
            }
            // Add more actions as needed
        }
    }
    // Redirect back to the index page
    header("Location: index.php");
    exit();
}
?>
