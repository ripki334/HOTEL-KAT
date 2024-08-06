<?php
    require 'init.php';
 $id=$_GET['ID'];
 $satpam->delete($id);
 if($satpam){
    header('Location: datasatpam.php');
 }else{
    die("Gagal Menghapus....");
 }
 ?>