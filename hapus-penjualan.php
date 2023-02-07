<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM penjualan WHERE id = '$id'";

if($connection->query($query)) {
    header("location: data-penjualan.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>