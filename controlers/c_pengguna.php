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




function edit(){


}

function hapus(){


}

function update ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_member
if (isset($_GET['id_member'])) {
    $id_member=input($_GET["id_member"]);

    $sql="SELECT * FROM laundy where id_member=$id_member";
    $hasil=mysqli_query($kon,$sql);
    $data = mysqli_fetch_assoc($hasil);
}

//Cek apakah ada kiriman form dari method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id=htmlspecialchars($_POST["id"]);
    $nama=input($_POST["nama"]);
    $alamat=input($_POST["alamat"]);
    $jenis_kelamin=input($_POST["jenis_kelamin"]);
    $tlp=input($_POST["tlp"]);

    //Query update data pada tabel anggota
    $sql="update member set
        nama='$nama',
        alamat='$alamat',
        email='$jenis_kelamin',
        no_hp='$tlp'
        where id_member=$id_member";

    //Mengeksekusi atau menjalankan query diatas
    $hasil=mysqli_query($kon,$sql);

    //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
    if ($hasil) {
        header("Location:index.php");
    }
    else {
        echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";

    }

}



?>