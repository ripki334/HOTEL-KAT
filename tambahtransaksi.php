<?php
    require 'init.php';
if($_POST){
    if($_POST>0){
        $tamu->data=[$_POST['ID'],$_POST['kode_transaksi']_POST['nama_tamu'],$_POST['tgl_transaksi'],$_POST['jmlh_transaksi']];
        $tamu->save();
            echo "Sukses Tambah Data";}else{
                echo "Gagal Tambah Data";}
            }
?>
<div class="conteiner">
    <seletion class="konten">
        <h3 class="text-center mt-3">TAMBAH DATA TRANSAKSI</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="datatransaksi.php">kembali</a>
            </div>
            <div class="card-body">
 <form action="" method="post" enctype="multipart/form-data">
 <table border= 0 >
    <input type="hidden" name="ID" id="ID">
        <tr>
            <td>kode transaksi</td>
            <td>: <input type="text" name="kode_transaksi" id="kode_transaksi" required=""></td>
        </tr>
        <tr>
            <td>nama tamu</td>
            <td>: <input type="text" name="nama_tamu" id="nama_tamu" required=""></td>
        </tr>
        <tr>
            <td>tgl transaksi</td>
            <td>: <input type="text" name="tgl_transaksi" id="tgl_transaksi" required=""></td>
        </tr>
        <tr>
            <td>jmlh kamar</td>
            <td>: <input type="text" name="jmlh_kamar" id="jmlh_kamar" required=""></td>
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