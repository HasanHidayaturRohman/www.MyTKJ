<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing data using prepared statement
    $sql = "SELECT * FROM data_guru WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        die("Data not found");
    }

    if (isset($_POST['update'])) {
        $nama = mysqli_real_escape_string($con, $_POST['nama']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);

        // Update data using prepared statement
        $updateSql = "UPDATE data_guru SET nama = ?, email = ?, phone = ? WHERE id = ?";
        $updateStmt = mysqli_prepare($con, $updateSql);
        mysqli_stmt_bind_param($updateStmt, "sssi", $nama, $email, $phone, $id);
        $updateQuery = mysqli_stmt_execute($updateStmt);

        if ($updateQuery) {
            header("Location: index.php?edit=success");
            exit(); // Make sure to exit after redirection
        } else {
            die("Failed to update data: " . mysqli_error($con));
        }
    }
} else {
    die("Invalid ID");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Guru</title>
    <!-- Add your CSS and other head elements here -->
</head>

<body>
    <h1>Edit Guru</h1>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($data['phone']); ?>" required>
        <br>
        <button type="submit" name="update">Update</button>
    </form>
</body>

</html>
