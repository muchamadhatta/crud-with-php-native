<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$kdcustomer           = $_POST['kdcustomer'];
$nmcustomer = $_POST['nmcustomer'];
$kota       = $_POST['kota'];

//query insert data ke dalam database
$query = "INSERT INTO customer (kdcustomer, nmcustomer, kota)
 VALUES ('$kdcustomer', '$nmcustomer', '$kota')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: data-customer.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>