<?php
    require 'init.php';
    $id=$_GET['ID'];
    $u=$koki->getdataSingel($id);
if($_POST){
    if($_POST>0){
        $koki->data=[$_POST['id'],$_POST['nama_koki'],$_POST['tugas_koki'],$_POST['gajih_koki']];
        $koki->update();
         echo "
            <script>
            alert('Berhasil Mengubah Data!');
            document.location.href='datakoki.php';
            </script>";}else{
             echo "Gagal Mengubah Data";}
         }
?>
 <div class="conteiner">
    <seletion class="konten">
        <h3 class="text-center mt-3">UBAH DATA USER</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="datakoki.php">kembali</a>
            </div>
            <div class="card-body">
 <form action="" method="post" enctype="multipart/form-data">
    <table border= 0 >
    <input type="hidden" name="ID" id="ID" required="" value="<?= $u["ID"]?>"></td>
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
 </body>
 </html>