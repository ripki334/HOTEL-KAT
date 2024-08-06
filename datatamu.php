<?php
require 'init.php';
$data_tamu= $tamu->getdata();
if(isset($_POST['cari'])){
    $data_tamu=$tamu->cari($_POST['keyword']);
}
?>
<style>
    body{
        text-align: center;
    }
</style>
    <section class="konten">
        <h3 class="text-center mt-3">DATA TAMU</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-info float-end" href="tambahtamu.php">Tambah</a>
            </div>
            <div class="card-body">
                <table>
        <tr><form action="" method="post">
            <td style="width: 430px"></td>
        <td><input type="text" name="keyword" style="width: 400px;"></td>
        <td><button type="submit" class="btn btn-sm btn-info" name="cari">CARI</button></td>
        </form>
        </tr>
        </table>


  <table style="width: 100%;" class="table">
    <tr class="table-dark">
        <th>ID</th>
        <th>nama tamu</th>
        <th>type kamar</th>
        <th>no kamar</th>
        <th>tarif kamar</th>
      
        <th>Aksi</th>
    </tr>
    <?php
        foreach($data_tamu as $row):
            ?>
            <tr>
                <td><?= $row['ID'];?></td>
                <td style="text-align: left;"><?= $row['nama_tamu'];?></td>
                <td style="text-align: left;"><?= $row['type_kamar'];?></td>
                <td style="text-align: left;"><?= $row['no_kamar'];?></td>
                <td style="text-align: left;"><?= $row['tarif_kamar'];?></td>
             
                <td>
                    <a href="ubahtamu.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin ubah?');"  class="btn btn-sm btn-warning">ubah</a>
                    <a href="hapustamu.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin hapus?');" class="btn btn-sm btn-danger" >hapus</a>
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