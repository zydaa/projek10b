<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        /* radio dan checkbox sejajar rapi */
        .inline-group {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 6px;
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px 20px;
            margin-top: 8px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #005fcc;
        }
    </style>

</head>
<body>

<div class="container">
    <h2>Form Input Mahasiswa</h2>

    <form action="proses_post_sanitasi.php" method="POST">

        <label>NIM</label>
        <input type="text" name="nim" required>

        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Umur</label>
        <input type="number" name="umur" required>

        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" required>

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" required>

        <label>No HP</label>
        <input type="text" name="no_hp" required>

        <label>Alamat</label>
        <input type="text" name="alamat" required>

        <label>Kota</label>
        <select name="kota" required>
            <option value="">-- Pilih Kota --</option>
            <option value="Semarang">Semarang</option>
            <option value="Solo">Solo</option>
            <option value="Brebes">Brebes</option>
            <option value="Kudus">Kudus</option>
            <option value="Demak">Demak</option>
            <option value="Salatiga">Salatiga</option>
        </select>

        <label>Jenis Kelamin</label>
        <div class="inline-group">
            <input type="radio" name="jk" value="Laki-laki">
            <span>Laki-laki</span>

            <input type="radio" name="jk" value="Perempuan">
            <span>Perempuan</span>
        </div>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Status</label>
        <div class="inline-group">
            <input type="radio" name="status" value="Kawin">
            <span>Kawin</span>

            <input type="radio" name="status" value="Belum kawin">
            <span>Belum kawin</span>
        </div>

        <label>Hobi</label>
        <div class="checkbox-group">
            <label><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
            <label><input type="checkbox" name="hobi[]" value="Olah Raga"> Olah Raga</label>
            <label><input type="checkbox" name="hobi[]" value="Musik"> Musik</label>
            <label><input type="checkbox" name="hobi[]" value="Traveling"> Traveling</label>
            <label><input type="checkbox" name="hobi[]" value="Menggambar"> Menggambar</label>
            <label><input type="checkbox" name="hobi[]" value="Gaming"> Gaming</label>
        </div>

        <button type="submit">Kirim Data</button>
    </form>
</div>

</body>
</html>