<?php
require 'database.php';
require 'index.php';

$tamu= new database();
$tamu->table='tb_tamu';
$tamu->field=['ID','nama_tamu','type_kamar','no_kamar','tarif_kamar'];

$pegawai= new database();
$pegawai->table='tb_pegawai';
$pegawai->field=['ID','nama_pegawai','jabatan_pegawai','gajih_pegawai'];

$koki= new database();
$koki->table='tb_koki';
$koki->field=['ID','nama_koki','tugas_koki','gajih_koki'];

$satpam= new database();
$satpam->table='tb_satpam';
$satpam->field=['ID','nama_satpam','tugas_satpam','gajih_satpam'];

$obe= new database();
$obe->table='tb_obe';
$obe->field=['ID','nama_obe','tugas_obe','gajih_obe'];

$transaksi= new database();
$transaksi->table='tb_transaksi';
$transaksi->field=['ID','kode_transaksi','nama_tamu','tgl_transaksi','jmlh_transaksi'];




