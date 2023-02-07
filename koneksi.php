<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "07feb2023_hatta";    

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($connection) {
    echo " ";
} else {
    echo "Koneksi Gagal! : ". mysqli_connect_error();
}


?>