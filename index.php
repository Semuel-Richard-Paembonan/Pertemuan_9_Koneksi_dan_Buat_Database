<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");


//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() //mengembalikan array numerik (angka)
//mysqli_fetch_assoc() // mengembalikan array asosiativ ( kalimat)
//mysqli_fetch_array() // mengembalikan array numerik dan asosiativ
//mysql_fetch_object()

// while($mhs = mysqli_fetch_assoc($result)){
// var_dump($mhs);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
<?php $i = 1; ?>
<?php foreach($mahasiswa as $row) : ?>
    <tr>
        <td><?= $i;?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"];?>" width="50" alt=""></td>
        <td><?= $row["nim"];?></td>
        <td><?= $row["nama"];?></td>
        <td><?= $row["email"];?></td>
        <td><?= $row["jurusan"];?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
    </table>
</body>
</html>