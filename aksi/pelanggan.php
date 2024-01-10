<?php
session_start();

include "../koneksi.php";
include "../function.php";

if($_POST){
    if($_POST['aksi']=='tambah'){
        $NamaPelanggan = $_POST['NamaPelanggan'];
        $Alamat = $_POST['Alamat'];
        $NomorTelepon = $_POST['NomorTelepon']; 

        $sql ="INSERT INTO pelanggan (PelangganID,NamaPelanggan,Alamat,NomorTelepon) VALUES (DEFAULT,'$NamaPelanggan','$Alamat','$NomorTelepon')";
         // echo $sql; //cek perintah
        mysqli_query($koneksi,$sql);
        notifikasi($koneksi);
        header('location:../index.php?p=pelanggan');
    }
    else if($_POST['aksi']=='ubah'){
        $PelangganID = $_POST['PelangganID'];
        $NamaPelanggan = $_POST['NamaPelanggan'];
        $Alamat = $_POST['Alamat'];
        $NomorTelepon = $_POST['NomorTelepon'];

        $sql="UPDATE pelanggan SET NamaPelanggan='$NamaPelanggan', Alamat='$Alamat', NomorTelepon='$NomorTelepon' WHERE PelangganID=$PelangganID";
        //  echo $sql; //cek perintah
        mysqli_query($koneksi,$sql);
        notifikasi($koneksi);
        header('location:../index.php?p=pelanggan');
    }
}

if($_GET){
    if ($_GET['aksi']=='hapus'){
        $PelangganID=$_GET['PelangganID'];
        $sql="DELETE FROM pelanggan WHERE PelangganID=$PelangganID";

        mysqli_query($koneksi,$sql);
        notifikasi($koneksi);
        header('location:../index.php?p=pelanggan');
    }
}



