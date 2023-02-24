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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
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
</body>
</html>