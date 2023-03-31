<?php 
require_once '../dbkoneksi.php';
$_iddel=$_GET['iddel'];
$sql="DELETE FROM Kartu WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
//redirect page
header('location:list_kartu.php');
?>