<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$nofaktur = $_POST['nofaktur'];
$tglfaktur = $_POST['tglfaktur'];
$kdcustomer = $_POST['kdcustomer'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE penjualan SET nofaktur='$nofaktur', tglfaktur = '$tglfaktur', kdcustomer = '$kdcustomer' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($connection->query($query)) {
    //redirect ke halaman data-penjualan.php 
    header("location: data-penjualan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>