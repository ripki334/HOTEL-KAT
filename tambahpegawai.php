<?php
 require 'init.php';
 if($_POST){
    if($_POST>0){
        $pegawai->data=[$_POST['ID'],$_POST['nama_pegawai'],$_POST['jabatan_pegawai'],$_POST['gajih_pegawai']];
        $pegawai->save();
        echo "Sukses Tambah Data";}else{
            echo "Gagal Tambah Data";}
        }
?>
  <div class="conteiner">
    <seletion class="konten">
        <h3 class="text-center mt-3">TAMBAH DATA PEWAGAI</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="datapegawai.php">kembali</a>
            </div>
            <div class="card-body">

 <form action="" method="post" enctype="multipart/form-data">
    <table>
    <input type="hidden" name="ID" id="ID" required="">
    
            <td>Nama</td>
            <td>: <input type="text" name="nama_pegawai" id="nama_pegawai" required=""></td>
        </tr>
        <tr>
            <td>jabatan</td>
            <td>: <input type="text" name="jabatan_pegawai" id="jabatan_pegawai" required=""></td>
        </tr>
        <tr>
            <td>gajih</td>
            <td>: <input type="text" name="gajih_pegawai" id="gajih_pegawai" required=""></td>
        </tr>
    
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-sm btn-dark float-end">save</button></td>
        </tr>
        
    </table>
    </form>
    </div>
        </div>
  </div>
  </selection>