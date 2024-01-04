<?php

// variabel koneksi
 $server    = "localhost";
 $user      = "root";
 $pass      = "";
 $db        = "kasir";


 // koneksi ke database
 $koneksi = mysqli_connect($server,$user,$pass,$db);
//  koneksi secara prosedural
$mysqli= new mysqli($server,$user,$pass,$db);
$mysqli->select_db($db);
$mysqli->query("SET NAMES 'utf8'");
$database=$db;

 // cek koneksi 
 if($koneksi){
//    echo "Koneksi Sukses";
 } else {
    echo "Koneksi Gagal";
    echo "<br>".mysqli_connect_error();
 }