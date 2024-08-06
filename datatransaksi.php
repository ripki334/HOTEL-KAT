<?php
require 'init.php';
$data_transaksi= $transaksi->getdata();
if(isset($_POST['cari'])){
    $data_transaksi=$transaksi->cari($_POST['keyword']);
}
?>
<style>
    body{
        text-align: center;
    }
</style>
    <section class="konten">
        <h3 class="text-center mt-3">DATA TRANSAKSI</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-info float-end" href="tambahtransaksi.php">Tambah</a>
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
        <th>kode transaksi</th>
        <th>nama tamu</th>
        <th>tgl transaksi</th>
        <th>jmlh transaksi</th>
      
        <th>Aksi</th>
    </tr>
    <?php
        foreach($data_transaksi as $row):
            ?>
            <tr>
                <td><?= $row['ID'];?></td>
                <td style="text-align: left;"><?= $row['kode_transaksi'];?></td>
                <td style="text-align: left;"><?= $row['nama_tamu'];?></td>
                <td style="text-align: left;"><?= $row['tgl_transaksi'];?></td>
                <td style="text-align: left;"><?= $row['jmlh_transaksi'];?></td>
             
               
            <?php
            endforeach; 
            ?>
  </table>
  </form>
        </div>
    </div>
</div> 
    
</section>