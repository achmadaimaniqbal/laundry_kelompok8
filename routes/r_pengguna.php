<?php include_once 'c_pengguna.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id=input($_POST["id"]);
    $nama=input($_POST["nama"]);
    $alamat=input($_POST["alamat"]);
    $jenis_kelamin=input($_POST["jenis kelamin"]);
    $tlp=input($_POST["tlp"]);

    //Query input menginput data kedalam tabel member
    $sql="INSERT INTO tb_member (id,nama,alamat,jenis_kelamin,tlp) VALUES
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

