<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$kdbarang = $_POST['kdbarang'];
$nmbarang = $_POST['nmbarang'];
$stok = $_POST['stok'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE barang SET kdbarang='$kdbarang', nmbarang = '$nmbarang', stok = '$stok' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman data-barang.php 
    header("location: data-barang.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>