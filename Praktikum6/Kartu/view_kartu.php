<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    $sql = "SELECT * FROM Kartu WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PELANGGAN ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Kode</td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Nama Kartu</td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Diskon</td><td><?=$row['diskon']?></td></tr>
        <tr>   <td>Iuran</td><td><?=$row['iuran']?></td></tr>
    </tbody>
</table>
