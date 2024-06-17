<?php

$hostname = "localhost";
$userDataBase = "root";
$passwordUser = "";
$dataBaseName = "pwb";

$koneksi = mysqli_connect($hostname, $userDataBase, $passwordUser, $dataBaseName) or die ("Koneksi gagal: " . mysqli_connect_error());

## echo "Data Berhasil Di Input!";
