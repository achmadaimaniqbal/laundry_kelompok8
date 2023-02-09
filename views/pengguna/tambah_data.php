<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran pengguna</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include_once "c_koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id=input($_POST["id"]);
        $nama=input($_POST["nama"]);
        $alamat=input($_POST["alamat"]);
        $jenis_kelamin=input($_POST["jenis kelamin"]);
        $tlp=input($_POST["tlp"]);

        //Query input menginput data kedalam tabel member
        $sql="insert into tb_member (id,nama,alamat,jenis_kelamin,tlp) values
		('$id','$nama','$alamat','$jenis_kelamin','$tlp')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>id:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan id" required />

        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>

        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>

        </div>
        <div class="form-group">
            <label>jenis kelamin:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan jenis kelaminS" required/>
        </div>
        <div class="form-group">
            <label>TLP:</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukan No tlp" required/>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>