<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['update'])) {
        $nama = mysqli_real_escape_string($con, $_POST['nama']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);

        $sql = "UPDATE data_guru SET nama='$nama', email='$email', phone='$phone' WHERE id='$id'";
        $query = mysqli_query($con, $sql);

        if ($query) {
            header('Location: index.php?update_success=true');
            exit();
        } else {
            $update_error = "Error updating data: " . mysqli_error($con);
        }
    }

    $sql_select = "SELECT * FROM data_guru WHERE id='$id'";
    $result_select = mysqli_query($con, $sql_select);
    $row = mysqli_fetch_assoc($result_select);
} else {
    header('Location: index.php');
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Update Data</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Update Data</h2>
        <?php
        if (isset($update_error)) {
            echo "<p class='error'>$update_error</p>";
        }
        ?>
        <form action="" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required><br>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $row['phone']; ?>" required><br>

            <button type="submit" name="update">Update</button>
        </form>
        <a href="index.php">Back to Home</a>
    </div>
</body>

</html>
