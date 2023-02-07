<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$kdcustomer     = $_POST['kdcustomer'];
$nmcustomer     = $_POST['nmcustomer'];
$kota           = $_POST['kota'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE customer SET nmcustomer = '$nmcustomer', kota = '$kota' WHERE kdcustomer = '$kdcustomer'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman data-customer.php 
    header("location: data-customer.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>