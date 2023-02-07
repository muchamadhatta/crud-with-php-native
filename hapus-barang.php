<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM barang WHERE id = '$id'";

if($connection->query($query)) {
    header("location: data-barang.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>