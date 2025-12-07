<?php

include "koneksi.php"; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nim           = mysqli_real_escape_string($koneksi, $_POST['nim']);
    $nama          = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $prodi         = mysqli_real_escape_string($koneksi, $_POST['prodi']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $alamat        = mysqli_real_escape_string($koneksi, $_POST['alamat']);

    $sql = "INSERT INTO mahasiswa (nim, nama, prodi, jenis_kelamin, alamat)
            VALUES ('$nim', '$nama', '$prodi', '$jenis_kelamin', '$alamat')";

    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        die("Gagal menyimpan data: " . mysqli_error($koneksi));
    }

    $data = [
        'id'            => mysqli_insert_id($koneksi) > 0 ? mysqli_insert_id($koneksi) : '-',
        'nim'           => $nim,
        'nama'          => $nama,
        'prodi'         => $prodi,
        'jenis_kelamin' => $jenis_kelamin,
        'alamat'        => $alamat
    ];

} else {
    header("Location: form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa Tersimpan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ecf0f1;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 600px;
            margin: 40px auto;
            background: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            border: 1px solid #bdc3c7;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #3498db;
            color: #ffffff;
            width: 30%;
        }

        .btn-kembali {
            background-color: #e67e22;
            color: #ffffff;
            border: none;
            padding: 10px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
        }

        .btn-kembali:hover {
            background-color: #cf711b;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Mahasiswa Berhasil Disimpan</h2>

    <table>
        <tr>
            <th>ID</th>
            <td><?php echo htmlspecialchars($data['id']); ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?php echo htmlspecialchars($data['nim']); ?></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?php echo htmlspecialchars($data['nama']); ?></td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td><?php echo htmlspecialchars($data['prodi']); ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo htmlspecialchars($data['jenis_kelamin']); ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo nl2br(htmlspecialchars($data['alamat'])); ?></td>
        </tr>
    </table>

    <a href="form.php" class="btn-kembali">Input Data Lagi</a>
</div>

</body>
</html>