<?php 

    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    if ($produk=="TV")$harga = 4200000;
    if ($produk=="Kulkas")$harga = 3100000;
    if ($produk=="Mesin Cuci")$harga = 3600000;

    $total_harga = $jumlah * $harga;
    
?>