<?php
// Koneksi ke basis data
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "my_tkj";

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

        // Melewati baris header dan looping untuk memproses data
        for ($i = 1; $i < count($rows); $i++) {
            $data = str_getcsv($rows[$i]);
            $data = array_map('trim', $data); // Memangkas spasi

            // Memeriksa jumlah kolom yang sesuai
            if (count($data) === 4) {
                // Lakukan penyisipan data ke basis data di sini
                // Misalnya, menggunakan perintah SQL INSERT
                $sql = "INSERT INTO data_guru (id, nama, email, phone) VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";

                if ($conn->query($sql) !== TRUE) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }

        // Penambahan kode untuk kembali ke halaman index.php
        header("Location: index.php");
        exit(); // Penting untuk menghentikan eksekusi script setelah melakukan redirect
    } else {
        echo "Format file tidak didukung. Hanya file CSV atau XLSX yang diizinkan.";
    }
} else {
    echo "Terjadi kesalahan saat mengunggah file.";
}

$conn->close();
?>