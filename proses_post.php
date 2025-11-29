<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Input POST</title>
    </head>
<body>

<h2>Data yang dikirim dengan metode POST</h2>

<?php
    echo "NIM : " . $_POST['nim'] . "<br>";
    echo "Nama : " . $_POST['nama'] . "<br>";
    echo "Tempat lahir : " . $_POST['tempat_lahir'] . "<br>";
    echo "Tanggal lahir : " . $_POST['tanggal_lahir'] . "<br>";
    echo "Alamat : " . $_POST['alamat'] . "<br>";

    /* ----- menampilkan kota menggunakan IF ---- */
    $kota = $_POST['kota'];

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
    $jk = $_POST['jk'];

    if ($jk == "Laki-laki") {
        echo "Jenis Kelamin : Laki-laki<br>";
    } else { 
        echo "Jenis Kelamin : Perempuan<br>";
    }

    echo "Email : " . $_POST['email'] . "<br>";

    //tampilkan hobi
    echo "Hobi : ";
    if (!empty($_POST['hobi'])) { 
        foreach ($_POST['hobi'] as $hobi) {
            echo $hobi. ", ";
    }
    }else{
        echo "Tidak Memiliki Hobi";
    }
?>
</body>
</html>

