<?php
// Memulai session
session_start();

// Menghapus session
session_destroy();

header("location:../login.php");