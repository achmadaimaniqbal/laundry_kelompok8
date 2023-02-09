<?php
include_once 'c_koneksi.php';

class c_pengguna{
    public function insert() {
        $conn = new c_koneksi();


    }
function tampil_data(){
    $conn = new c_koneksi();

    $sql = "SELECT * FROM tb_member";
    
    $query = mysqli_query($conn->koneksi(),$sql);


}

function edit(){


}

function hapus(){


}

function update(){


}
}
?>