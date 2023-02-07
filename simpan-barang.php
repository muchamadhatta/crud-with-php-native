<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$kdbarang = $_POST['kdbarang'];
$nmbarang = $_POST['nmbarang'];
$stok = $_POST['stok'];

//query insert data ke dalam database
$query = "INSERT INTO barang (kdbarang, nmbarang, stok)
 VALUES ('$kdbarang', '$nmbarang', '$stok')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: data-barang.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>