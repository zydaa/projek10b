<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Input GET</title>
    </head>
<body>

<h2>Data yang dikirim dengan metode GET</h2>

<?php
    echo "NIM : " . $_GET['nim'] . "<br>";
    echo "Nama : " . $_GET['nama'] . "<br>";
    echo "Tempat lahir : " . $_GET['tempat_lahir'] . "<br>";
    echo "Tanggal lahir : " . $_GET['tanggal_lahir'] . "<br>";
    echo "Alamat : " . $_GET['alamat'] . "<br>";

    /* ----- menampilkan kota menggunakan IF ---- */
    $kota = $_GET['kota'];

    if ($kota == "Semarang") {
        echo "kota : Semarang<br>";
    } elseif ($kota == "Solo") {
        echo "kota : Solo<br>";
    } elseif ($kota == "Salatiga") {
        echo "kota : Salatiga<br>";
    } elseif ($kota == "kudus") {
        echo "kota : Kudus<br>";
    } else {
        echo "kota : Pekalongan<br>";
    }

    /* ----- menampilkan Jenis Kelamin menggunakan IF ---- */
    $jk = $_GET['jk'];

    if ($jk == "Laki-laki") {
        echo "Jenis Kelamin : Laki-laki<br>";
    } else { 
        echo "Jenis Kelamin : Perempuan<br>";
    }

    echo "Email : " . $_GET['email'] . "<br>";

    //tampilkan hobi
    echo "Hobi : ";
    if (!empty($_GET['hobi'])) { 
        foreach ($_GET['hobi'] as $hobi) {
            echo $hobi. ", ";
    }
    }else{
        echo "Tidak Memiliki Hobi";
    }
?>
</body>
</html>

