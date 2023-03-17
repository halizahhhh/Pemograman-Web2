<?php 
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>
<?php 
$Mahasiswa1 = [
    'id'=>1,
    'nim'=>01102222,
    'uts'=>95,
    'uas'=>90,
    'tugas'=>90,
];
$Mahasiswa2 = [
    'id'=>2,
    'nim'=>01102345,
    'uts'=>90,
    'uas'=>90,
    'tugas'=>80,
];
$Mahasiswa3 = [
    'id'=>3,
    'nim'=>01103452,
    'uts'=>85,
    'uas'=>80,
    'tugas'=>90,
];

$ar_nilai = [$Mahasiswa1, $Mahasiswa2, $Mahasiswa3];

?>
<div class="container">
        <h2>Daftar Nilai Mahasiswa</h2>
        <table class="table table-stripped">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){?>
            <tr>
                <td><?= $nilai['id'];?></td>
                <td><?= $nilai['nim'];?></td>
                <td><?= $nilai['uts'];?></td>
                <td><?= $nilai['uas'];?></td>
                <td><?= $nilai['tugas'];?></td>
            </tr>
            <?php }?>
        </table>
    </div>
<?php require_once "layouts/footer.php"; ?>