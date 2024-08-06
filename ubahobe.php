<?php
    require 'init.php';
    $nis=$_GET['ID'];
    $s=$obe->getdataSingel($nis);
if($_POST){
    if($_POST>0){
        $obe->data=[$_POST['ID'],$_POST['nama_obe'],$_POST['tugas_obe'],$_POST['gajih_obe']];
        $obe->update();
        echo "
           <script>
           alert('Berhasil Mengubah Data!');
           document.location.href='dataobe.php';
           </script>";}else{
            echo "Gagal Mengubah Data";}
        }
?>
 <div class="conteiner">
    <seletion class="konten">
        <h3 class="text-center mt-3">UBAH DATA SISWA</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="dataobe.php">kembali</a>
            </div>
            <div class="card-body">
 <form action="" method="post" enctype="multipart/form-data">
    <table border= 0 >
    <input type="hidden" name="ID" id="ID" required="" value="<?= $s["ID"]?>">
    <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama_obe" id="nama_obe" required=""></td>
        </tr>
        <tr>
            <td>tugas</td>
            <td>: <input type="text" name="tugas_obe" id="tugas_obe" required=""></td>
        </tr>
        <tr>
            <td>gajih</td>
            <td>: <input type="text" name="gajih_obe" id="gajih_obe" required=""></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-sm btn-dark float-end" >save</button></td>
        </tr>
        
    </table>
    </form>
 </body>
 </html>