<!DOCTYPE html>
<html>
    <head>
        <title>Form Data (POST)</title>
    </head>
<body>

<h2>Form Input Data Mahasiswa -POST</h2>
<form action="proses_post.php" method="POST">
    NIM : <input type="text" name="nim"><br><br>
    Nama: <input type="text" name="nama"><br><br>
    Tempat Lahir : <input type="text" name="tempat_lahir"><br><br>
    Tanggal Lahir : <input type="date" name="tanggal_lahir"><br><br>
    No hp : <input type="text" name="no hp"><br><br>    
    alamat: <br>
    <textarea name="alamat" rows="4" cols="30"></textarea><br><br>
    kota :
    <select name="kota">
        <option>Semarang</option>
        <option>Solo</option>
        <option>Salatiga</option>
        <option>Kudus</option>
        <option>Pekalongan</option>
    </select><br><br>
    jenis kelamin :
    <input type="radio" name="jk" value="laki-laki"> Laki-laki
    <input type="radio" name="jk" value="Perempuan"> Perempuan
    <br><br>
    email :  <input type="email" name="email"><br><br>
    Hobi :
    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
    <input type="checkbox" name="hobi[]" value="Olah Raga"> Olah Raga
    <input type="checkbox" name="hobi[]" value="Musik"> Musik
    <input type="checkbox" name="hobi[]" value="Traveling"> Traveling
    <br><br>
    
    <input type="submit" value="kirim">  
</form>
</body>
</html>

