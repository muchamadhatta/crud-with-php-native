<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM customer WHERE id = '$id'";

if($connection->query($query)) {
    header("location: data-customer.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>