<?php
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
?>


<!-- <?php
// Koneksi ke basis data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_tkj";

$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah file diunggah dan tidak ada kesalahan
if (isset($_FILES['excelFile']) && $_FILES['excelFile']['error'] === UPLOAD_ERR_OK) {
    $fileInfo = pathinfo($_FILES['excelFile']['name']);

    // Hanya menerima file dengan ekstensi CSV atau XLSX
    if ($fileInfo['extension'] == 'csv' || $fileInfo['extension'] == 'xlsx') {
        $filePath = $_FILES['excelFile']['tmp_name'];

        // Lakukan proses baca file Excel dan masukkan data ke basis data di sini
        // Anda memerlukan pustaka atau kode tambahan untuk melakukan ini

        // Contoh: Baca data dari file CSV
        $csvData = file_get_contents($filePath);
        $rows = explode("\n", $csvData);

        foreach ($rows as $row) {
            $data = str_getcsv($row);

            // Lakukan penyisipan data ke basis data di sini
            // Misalnya, menggunakan perintah SQL INSERT
            $sql = "INSERT INTO data_guru (id, nama, email, phone) VALUES ('$data[0]', '$data[1]', '$data[2]')";

            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        echo "Data berhasil diunggah ke basis data.";
    } else {
        echo "Format file tidak didukung. Hanya file CSV atau XLSX yang diizinkan.";
    }
} else {
    echo "Terjadi kesalahan saat mengunggah file.";
}

$conn->close();
?> -->