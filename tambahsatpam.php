<?php
    require 'init.php';
if($_POST){
    if($_POST>0){
        $satpam->data=[$_POST['ID'],$_POST['nama_satpam'],$_POST['tugas_satpam'],$_POST['gajih_satpam']];
        $satpam->save();
            echo "Sukses Tambah Data";}else{
                echo "Gagal Tambah Data";}
            }
?>
<div class="conteiner">
    <seletion class="konten">
        <h3 class="text-center mt-3">TAMBAH DATA SATPAM</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="datasatpam.php">kembali</a>
            </div>
            <div class="card-body">
 <form action="" method="post" enctype="multipart/form-data">
 <table border= 0 >
    <input type="hidden" name="ID" id="ID">
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
       
        <tr>
            <td></td>
            <td ><button type="submit" class="btn btn-sm btn-dark float-end" >save</button></td>
        </tr>
        
        </table>
    </form>
    </div>
    </div>
</div>
    </selection>