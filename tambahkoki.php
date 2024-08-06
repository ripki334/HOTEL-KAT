<?php
    require 'init.php';
 if($_POST){
    if($_POST>0){
        $koki->data=[$_POST['id'],$_POST['nama_koki'],$_POST['tugas_koki'],$_POST['gajih_koki']];
        $koki->save();
        echo "Sukses Tambah Data";}else{
            echo "Gagal Tambah Data";}
        }
?>
 <div class="conteiner">
    <seletion class="konten">
        <h3 class="text-center mt-3">TAMBAH DATA KOKI</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="datakoki.php">kembali</a>
            </div>
            <div class="card-body">
 <form action="" method="post" enctype="multipart/form-data">
    <table border= 0 >
        <tr>
            <td>nama</td>
            <label for=""><input  type="hidden" name="id" id="id" required=""></label>
            <td>: <input type="text" name="nama_koki" id="nama_koki" required=""></td>
        </tr>
        <tr>
            <td>tugas</td>
            <td>: <input type="text" name="tugas_koki" id="tugas_koki" required=""></td>
        </tr>
        <tr>
            <td>gajih</td>
            <td>: <input type="text" name="gajih_koki" id="gajih_koki" required=""></td>
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