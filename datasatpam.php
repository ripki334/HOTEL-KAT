<?php
require 'init.php';
$data_satpam= $satpam->getdata();
if(isset($_POST['cari'])){
    $data_satpam=$satpam->cari($_POST['keyword']);
}
?>
<style>
    body{
        text-align: center;
    }
</style>
    <section class="konten">
        <h3 class="text-center mt-3">DATA SATPAM</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="tambahsatpam.php">Tambah</a>
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
    <tr class="table-dark">
        <th>ID</th>
        <th>nama satpam</th>
        <th>tugas satpam</th>
        <th>gajih satpam</th>
        <th>Aksi</th>
    </tr>
    <?php
        foreach($data_satpam as $row):
            ?>
            <tr style="text-align : center;">
                <td><?= $row['ID'];?></td>
                <td style="text-align: left;"><?= $row['nama_satpam'];?></td>
                <td ><?= $row['tugas_satpam'];?></td>
                <td style="text-align: center;"><?= $row['gajih_satpam'];?></td>
               
                <td>
                    <a href="ubahsatpam.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin ubah?');"  class="btn btn-sm btn-warning">ubah</a>
                    <a href="hapussatpam.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin hapus?');" class="btn btn-sm btn-danger" >hapus</a>
                </td>
            </tr>
            <?php
            endforeach; 
            ?>
  </table>
  </form>
        </div>
    </div>
</div> 
    
</section>