<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hasil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-bordered text-uppercase">
            <tr class="table-success">
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Total Nilai</th>
                <th>Keterangan</th>
            </tr>
            <?php require_once "proses_nilai.php"; ?>
            <tr>
                <td><?= $nama; ?></td>
                <td><?= $MatKul; ?></td>
                <td><?= $tugas; ?></td>
                <td><?= $UTS; ?></td>
                <td><?= $uas; ?></td>
                <td><?= number_format($total_nilai, 0) ; ?></td>
                <td><?= $keterangan; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>