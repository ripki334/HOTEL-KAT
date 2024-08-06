<?php
    require 'init.php';
 $username=$_GET['ID'];
 $koki->delete($username);
 if($koki){
    header('Location: datakoki.php');
 }else{
    die("Gagal Menghapus....");
 }
 ?>