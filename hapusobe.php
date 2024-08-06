<?php
    require 'init.php';
 $nis=$_GET['ID'];
 $obe->delete($nis);
 if($obe){
    header('Location: dataobe.php');
 }else{
    die("Gagal Menghapus....");
 }
 ?>