<?php
require 'init.php';
$data_obe= $obe->getdata();
if(isset($_POST['cari'])){
    $data_obe=$obe->cari($_POST['keyword']);
}
?>
<style>
    body{

        text-align: center;
    }
</style>
<div class="conteiner">
    <section class="konten">
        <h3 class="text-center mt-3">DATA OBE</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="tambahobe.php">Tambah</a>
            </div>
            <div class="card-body">
                <table>
        <tr><form action="" method="post">
            <td style="width: 430px"></td>
        <td><input type="text" name="keyword" style="width: 400px;"></td>
        <td><button type="submit" class="btn btn-sm btn-dark" name="cari">CARI</button></td>
        </form>
        </tr>
        </table>

  <table style="width: 100%;" class="table">
    <tr class= "table-dark">
        <th>ID</th>
        <th>nama obe</th>
        <th>tugas obe</th>
        <th>gajih obe</th>
        <th>Aksi</th>
    </tr>
    <?php
        foreach($data_obe as $row):
            ?>
            <tr>
                <td><?= $row['ID'];?></td>
                <td style="text-align: left;"><?= $row['nama_obe'];?></td>
                <td style="text-align: left;"><?= $row['tugas_obe'];?></td>
                <td style="text-align: left;"><?= $row['gajih_obe'];?></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="ubahobe.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin ubah?');" style="text-decoration:none;">ubah</a>
                    <a class="btn btn-sm btn-danger" href="hapusobe.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin hapus?');" style="text-decoration:none;">hapus</a>
                </td>
            </tr>
            <?php
            endforeach; 
            ?>
  </table>
  
</body>
</html>
    </form>
</section>