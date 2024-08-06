<?php

require 'init.php';

$id=$_GET['ID'];
$k=$tamu->getdataSingel($id);

if($_POST){
    if($_POST>0){
        $tamu->data=[$_POST['ID'],$_POST['nama_tamu'],$_POST['type_kamar'],$_POST['no_kamar'],$_POST['tarif_kamar']];
        $tamu->save();
       
        echo "
           <script>
           alert('Berhasil Mengubah Data!');
           document.location.href='datatamu.php';
           </script>";
        }else{
            echo "Gagal Mengubah Data";}
        }
?>

<div class="conteiner">
    <seletion class="konten">
        <h3 class="text-center mt-3">UBAH DATA SATPAM</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="datatamu.php">kembali</a>
            </div>
            <div class="card-body">
 <form action="" method="post" enctype="multipart/form-data">
 <table border= 0 >
     <input type="hidden" name="ID" id="ID" value="<?= $k["ID"];?>">
        <tr>
        <tr>
            <td>nama</td>
            <td>: <input type="text" name="nama_tamu" id="nama_tamu" required=""></td>
        </tr>
        <tr>
            <td>type kamar</td>
            <td>: <input type="text" name="type_kamar" id="type_kamar" required=""></td>
        </tr>
        <tr>
            <td>no kamar</td>
            <td>: <input type="text" name="no_kamar" id="no_kamar" required=""></td>
        </tr>
        <tr>
            <td>tarif kamar</td>
            <td>: <input type="text" name="tarif_kamar" id="tarif_kamar" required=""></td>
        </tr>
            <td></td>
            <td ><button type="submit" class="btn btn-sm btn-dark float-end" >save</button></td>
        </tr>
        
    </table>

    </form>
 </body>
 </html>