<?php 

    $nama = $_GET['nama'];
    $MatKul = $_GET['MatKul'];
    $tugas = $_GET['tugas'];
    $UTS = $_GET['UTS'];
    $uas = $_GET['uas'];
    $total_nilai = ($tugas + $UTS + $uas) / 3;

    if($total_nilai > 75){
        $keterangan = "LULUS";
    }
    else{
        $keterangan = "TIDAK LULUS";
    }
    


?>