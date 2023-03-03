<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Input Nilai Mahasiswa</h2>
        
        <form action="from_hasil.php" method="GET">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="MatKul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="MatKul" name="MatKul" required="required" class="custom-select">
                <option value="UI/UX">UI/UX</option>
                <option value="Pemograman Web">Pemograman Web</option>
                <option value="Basis Data">Basis Data</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
            <div class="col-8">
            <input id="tugas" name="tugas" placeholder="Masukkan Nilai Tugas" type="text" required="required" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="UTS" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="UTS" name="UTS" placeholder="Masukkan Nilai UTS" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>