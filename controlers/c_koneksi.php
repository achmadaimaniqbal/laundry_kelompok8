<?php

$host="localhost";
$user="root";
$password="";
$db="tb_member";

$conn = mysqli_connect($id,$nama,$alamat,$jenis_kelamin,$telp);
if (!$conn){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>