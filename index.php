<?php
include 'connect.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO data_guru (nama, email, phone)
    VALUES ('$nama', '$email', '$phone')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data Berhasil Dimasukkan";
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>MYTKJ</title>

</head>

<body>
    <nav>
        <ul>
            <form action="index.php" method="get">
                <input type="text" name="search_query" placeholder="Search by Name">
                <button type="submit">Search</button>
            </form>

            <li><a href="/www.MyTKJ/home-page/index.php">Home</a></li>
            <li><a href="/www.MyTKJ/register/logout.php">logout</a></li>



        </ul>
    </nav>
    </head>

    <!--  -->
    <?php
    // ... (database connection code)
    include 'connect.php'; // Make sure this file includes the database connection
    
    if (isset($_POST['tambah'])) { // Change 'submit' to 'tambah'
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
    }
    if (isset($_GET['search_query'])) {
        $searchQuery = $_GET['search_query'];

        // Construct the SQL query based on the search query
        $sql = "SELECT * FROM data_guru WHERE nama LIKE '%$searchQuery%'";

        // Execute the query
        $result = $conn->query($sql);
    }
    ?>

    <!-- Display search form again -->
    <!-- <form action="index.php" method="get">
        <input type="text" name="search_query" placeholder="Search by Name">
        <button type="submit">Search</button>
    </form> -->
    <form action="index.php" method="get" class="search-form">
        <input type="text" name="search_query" placeholder="Search by Name">
        <button type="submit">Search</button>
    </form>


    <!-- Display search results if available -->
    <?php
    if (isset($result) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Name: " . $row['nama'] . "</p>";
            echo "<p>Email: " . $row['email'] . "</p>";
            echo "<p>Phone: " . $row['phone'] . "</p>";
        }
    } elseif (isset($result) && $result->num_rows === 0) {
        echo "No results found.";
    }
    ?>
    <!--  -->




    <div class="container">

        <div class="form-group">
            <h2>Tambah Data</h2>

            <!-- Form to add new user -->
            <form action="process_create.php" method="POST">
                <label for="nama">Name:</label>
                <input type="text" id="nama" name="nama" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
                <button type="submit" name="submit">submit</button>
            </form>




            <h3>UNGGAH DATA DENGAN FORMAT ".csv"</h3>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="excelFile"
                    accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"
                    required>
                <input type="submit" value="Unggah">
            </form>



            <!-- Table to display users -->
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>

                    <!-- <tr>
                        <td><input type="checkbox" name="selected[]" value="<?php echo $guru['id']; ?>"></td>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <?php echo $guru['nama']; ?>
                        </td>
                        <td>
                            <?php echo $guru['email']; ?>
                        </td>
                        <td>
                            <?php echo $guru['phone']; ?>
                        </td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?id=<?php echo $guru['id']; ?>'>Edit</a> |
                            <a class='btn btn-danger btn-sm' href='delete.php?id=<?php echo $guru['id']; ?>'>Delete</a>
                        </td>
                    </tr> -->

                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT*FROM data_guru";
                    $query = mysqli_query($con, $sql);
                    $i = 1;
                    while ($guru = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                        echo "<td>" . $guru['nama'] . "</td>";
                        echo "<td>" . $guru['email'] . "</td>";
                        echo "<td>" . $guru['phone'] . "</td>";
                        echo "<td>";
                        echo "<a class='btn btn-primary btn-sm' href='edit.php?id=" . $guru['id'] . "'>Edit</a>|";
                        echo "<a class='btn btn-danger btn-sm' href='delete.php?id=" . $guru['id'] . "'>Delete</a>|";
                        echo "</td>";
                        echo "</tr>";
                        $i++;
                    }
                    ?>
                </tbody>

                <!-- <form action="process_multiple_actions.php" method="POST">
                    <select name="action">
                        <option value="delete">Delete</option>
                        <option value="edit">Edit</option> -->
                        <!-- Add more action options if needed -->
                    <!-- </select>
                    <button type="submit">Submit</button>
                </form> -->


            </table>
        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>