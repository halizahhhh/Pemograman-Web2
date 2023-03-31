<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    $sql = "SELECT * FROM Vendor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PELANGGAN ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Kode</td><td><?=$row['nomor']?></td></tr>
        <tr>   <td>Nama Pelanggan</td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Kota</td><td><?=$row['kota']?></td></tr>
        <tr>   <td>Kontak</td><td><?=$row['kontak']?></td></tr>
    </tbody>
</table>
