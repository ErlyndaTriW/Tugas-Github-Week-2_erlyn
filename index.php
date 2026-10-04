<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 40px;
        }
        .container {
            max-width: 500px;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 0 auto 20px auto;
        }
        h2 {
            margin-top: 0;
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result-box {
            background-color: #e9f5ff;
            border: 1px solid #b8daff;
            padding: 15px;
            border-radius: 5px;
        }
        .result-item {
            margin-bottom: 8px;
        }
        .result-item span {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Input Data Pengguna</h2>
    <!-- Form HTML mengirim data ke halaman ini sendiri menggunakan method POST -->
    <form action="" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="telepon" required>
        </div>

        <button type="submit" name="submit">Submit</button>
    </form>
</div>

<?php
// Memproses data PHP saat form dikirim melalui method POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Mengambil dan membersihkan input data
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $telepon = htmlspecialchars($_POST['telepon']);
    ?>

    <div class="container result-box">
        <h2>Hasil Input Data</h2>
        <div class="result-item"><span>Nama:</span> <?php echo $nama; ?></div>
        <div class="result-item"><span>Email:</span> <?php echo $email; ?></div>
        <div class="result-item"><span>Jenis Kelamin:</span> <?php echo $jenis_kelamin; ?></div>
        <div class="result-item"><span>Alamat:</span> <?php echo nl2br($alamat); ?></div>
        <div class="result-item"><span>Nomor Telepon:</span> <?php echo $telepon; ?></div>
    </div>

    <?php
}
?>

</body>
</html>