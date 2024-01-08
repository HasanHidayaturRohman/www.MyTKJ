<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    // Assuming you have a database connection in connect.php
    include("connect.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM data_guru WHERE id = $id";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Assuming 'nama', 'email', and 'phone' are columns in your database
            $nama = $row['nama'];
            $email = $row['email'];
            $phone = $row['phone'];

            // Display details in a pop-up
            echo "<div class='popup active'>";
            echo "<div class='popup-content'>";
            echo "<h2>Detail Guru</h2>";
            echo "<p>Nama: $nama</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Phone: $phone</p>";
            echo "<button class='close' onclick='closePopup()'>Close</button>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "No data found.";
        }
    }
    ?>

    <!-- Your HTML content -->

    <script>
        function closePopup() {
            var popup = document.querySelector('.popup');
            popup.classList.remove('active');
        }
    </script>
</body>

</html>
