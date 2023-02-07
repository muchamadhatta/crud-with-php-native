<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nofaktur = $_POST['nofaktur'];
$tglfaktur = $_POST['tglfaktur'];
$kdcustomer = $_POST['kdcustomer'];

//query insert data ke dalam database
$query = "INSERT INTO penjualan (nofaktur, tglfaktur, kdcustomer)
 VALUES ('$nofaktur', '$tglfaktur', '$kdcustomer')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: data-penjualan.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>