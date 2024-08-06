<?php

require 'init.php';

$id=$_GET['ID'];
$k=$satpam->getdataSingel($id);

if($_POST){
    if($_POST>0){
        $satpam->data=[$_POST['ID'],$_POST['nama_satpam'],$_POST['tugas_satpam'],$_POST['gajih_satpam']];
        $satpam->update();
       
        echo "
           <script>
           alert('Berhasil Mengubah Data!');
           document.location.href='datasatpam.php';
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
                <a class="btn btn-sm btn-dark float-end" href="datasatpam.php">kembali</a>
            </div>
            <div class="card-body">
 <form action="" method="post" enctype="multipart/form-data">
 <table border= 0 >
     <input type="hidden" name="ID" id="ID" value="<?= $k["ID"];?>">
        <tr>
        <tr>
            <td>nama</td>
            <td>: <input type="text" name="nama_satpam" id="nama_satpam" required=""></td>
        </tr>
        <tr>
            <td>tugas</td>
            <td>: <input type="text" name="tugas_satpam" id="tugas_satpam" required=""></td>
        </tr>
        <tr>
            <td>gajih</td>
            <td>: <input type="text" name="gajih_satpam" id="gajih_satpam" required=""></td>
        </tr>
            <td></td>
            <td ><button type="submit" class="btn btn-sm btn-dark float-end" >save</button></td>
        </tr>
        
    </table>

    </form>
 </body>
 </html>