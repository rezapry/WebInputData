<?php

$db_host = "localhost"; //Bisa www.apa.com atau 192.168.100.1
$db_user = "root";
$db_password = "";
$db_name = "crud";

$koneksi = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (mysqli_connect_errno()) {
    echo "GAGAL MELAKUKAN KONEKSI KE DATABASE! " . mysqli_connect_error();
}
