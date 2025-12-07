<?php

function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$nama       = sanitize($_POST['nama']);
$alamat     = sanitize($_POST['alamat']);
$no_hp      = sanitize($_POST['no_hp']);
$jk         = isset($_POST['jk']) ? sanitize($_POST['jk']) : "-";
$email      = sanitize($_POST['email']);
$status     = isset($_POST['status']) ? sanitize($_POST['status']) : "-";


if (!empty($_POST['hobi'])) {
    $hobi = array_map('sanitize', $_POST['hobi']);
    $hobi_result = implode(", ", $hobi);
} else {
    $hobi_result = "Tidak memiliki hobi";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Data POST</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light p-4">

<div class="container">
    <div class="card shadow p-4">

        <h3 class="mb-4 text-center">Hasil Input Form</h3>

        <table class="table table-bordered table-striped">
            <tr>
                <th width="200">Nama</th>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $alamat ?></td>
            </tr>
            <tr>
                <th>No. HP</th>
                <td><?= $no_hp ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?= $jk ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?= $email ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?= $status ?></td>
            </tr>
            <tr>
                <th>Hobi</th>
                <td><?= $hobi_result ?></td>
            </tr>
        </table>

        <div class="text-center mt-3">
            <a href="f_post.php" class="btn btn-primary">Kembali ke Form</a>
        </div>

    </div>
</div>

</body>
</html>
