<?php
    require 'init.php';
 $nik=$_GET['ID'];
 $pegawai->delete($nik);
 if($pegawai){
    header('Location: datapegawai.php');
 }else{
    die("Gagal Menghapus....");
 }
 ?>