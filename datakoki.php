<?php
require 'init.php';
$data_koki= $koki->getdata();
if(isset($_POST['cari'])){
    $data_koki=$koki->cari($_POST['keyword']);
}
?>
<style>
    body{
        text-align: center;
    }
</style>
<div class="conteiner">
    <section class="konten">
        <h3 class="text-center mt-3">DATA KOKI</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="tambahkoki.php">Tambah</a>
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
        <th>nama koki</th>
        <th>tugas koki</th>
        <th>gajih koki</th>
        <th>Aksi</th>
    </tr>
    <?php
        foreach($data_koki as $row):
            ?>
            <tr>
            <td style="text-align: left;"><?= $row['ID'];?></td>
                <td style="text-align: left;"><?= $row['nama_koki'];?></td>
                <td style="text-align: left;"><?= $row['tugas_koki'];?></td>
                <td style="text-align: left;"><?= $row['gajih_koki'];?></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="ubahkoki.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin ubah?');" style="text-decoration:none;">ubah</a>
                    <a class="btn btn-sm btn-danger" href="hapuskoki.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin hapus?');" style="text-decoration:none;">hapus</a>
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