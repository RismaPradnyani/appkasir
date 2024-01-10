<?php 
if (empty($_GET['p'])){
    $title="Sistem Informasi Biaya Pendidikan";
    $konten="konten/home.php";
}
else if($_GET['p']=='produk'){
    $title="Data Produk Kasir";
    $konten="konten/produk.php";
}
else if($_GET['p']=='pelanggan'){
    $title="Data Pelanggan";
    $konten="konten/pelanggan.php";
}
else if($_GET['p']=='user'){
    $title="Data User";
    $konten="konten/user.php";
}
else if($_GET['p']=='laporan'){
    $title="Laporan Sistem";
    $konten="konten/laporan.php";
}
else if($_GET['p']=='backup'){
    $title="Backup Sistem";
    $konten="konten/backup.php";
}
else if($_GET['p']=='restore'){
    $title="Restore Sistem";
    $konten="konten/restore.php";
}



