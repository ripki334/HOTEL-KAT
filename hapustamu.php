<?php
    require 'init.php';
 $id=$_GET['ID'];
 $tamu->delete($id);
 if($tamu){
    header('Location: datatamu.php');
 }else{
    die("Gagal Menghapus....");
 }
 ?>