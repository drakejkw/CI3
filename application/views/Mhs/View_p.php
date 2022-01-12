<html>
<head><title>Penambahan penduduk</title></head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<body>
<h1 align=center>Tambah Penduduk</h1>
<form method=post>
<section class=base>
<div>
<label></label>
<input type=hidden name=id>
<br />
</div>
<div>
<label>Nama Penduduk</label>
<input type=text name=nama>
</div>
<div>
<label>Alamat</label>
<input type=text name=alamat>
</div>
<div>
<label>Pekerjaan</label>
<input type=text name=pekerjaan>
</div>
<div>
<button type=submit name=tmbl>Kirim</button>
</div>
</section>
</form>
</body>
</html>


<?php

    $koneksi = mysqli_connect('localhost','root','','formku');

    if(!$koneksi){
        die('Gagal menghubungkan!');
    }
     

    if(isset($_POST['tmbl'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];

        $perintah = "insert into siswa (id,nama,alamat,pekerjaan)values(null,'$nama','$alamat','$pekerjaan')";
        $hasil = mysqli_query($koneksi,$perintah);

        //Periksa Ada yang salah dengan $perintah
        if(!$hasil){
            die('Perintah  gagal dijalankan: '.mysqli_errno($koneksi) . " - " .mysqli_errno($koneksi));
        } else{

            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju

            echo "<script>alert('Data berhasil ditambahkan'); window.location='Berandi.php'</script>";

        }

    }
?>
