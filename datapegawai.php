<?php
require 'init.php';
$data_pegawai= $pegawai->getdata();
if(isset($_POST['cari'])){
    $data_pegawai=$pegawai->cari($_POST['keyword']);
}
?>
<style>
    body{

        text-align: center;
    }
</style>
<div class="conteiner">
    <section class="konten">
        <h3 class="text-center mt-3">DATA PEGAWAI</h3>

        <div class="card">
            <div class="card-header text-bg-succes">
                <a class="btn btn-sm btn-dark float-end" href="tambahpegawai.php">Tambah</a>
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
        <th>nama pegawai</th>
        <th>jabatan pegawai</th>
        <th>gajih pegawai</th>
        <th>Aksi</th>
    </tr>
    <?php
        foreach($data_pegawai as $row):
            ?>
            <tr>
                <td><?= $row['ID'];?></td>
                <td style="text-align: left;"><?= $row['nama_pegawai'];?></td>
                <td style="text-align: left;"><?= $row['jabatan_pegawai'];?></td>
                <td style="text-align: left;"><?= $row['gajih_pegawai'];?></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="ubahpegawai.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin ubah?');" style="text-decoration:none;">ubah</a>
                    <a class="btn btn-sm btn-danger" href="hapuspegawai.php?ID=<?=$row["ID"];?>" onclick="return confirm('yakin hapus?');" style="text-decoration:none;">hapus</a>
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