<?php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f7;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
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

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border-radius: 4px;
            border: 1px solid #bdc3c7;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        .radio-group {
            margin-bottom: 12px;
        }

        .radio-group label {
            font-weight: normal;
            margin-right: 10px;
        }

        .btn-submit {
            background-color: #27ae60;
            color: #ffffff;
            border: none;
            padding: 10px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-submit:hover {
            background-color: #219150;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Input Data Mahasiswa</h2>

    <form action="simpan.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="prodi">Program Studi:</label>
        <select id="prodi" name="prodi" required>
            <option value="">-- Pilih Program Studi --</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Teknik Industri">Teknik Industri</option>
        </select>

        <label>Jenis Kelamin:</label>
        <div class="radio-group">
            <label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required>
                Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="Perempuan" required>
                Perempuan
            </label>
        </div>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4" required></textarea>

        <button type="submit" class="btn-submit">Simpan Data</button>
    </form>
</div>

</body>
</html>