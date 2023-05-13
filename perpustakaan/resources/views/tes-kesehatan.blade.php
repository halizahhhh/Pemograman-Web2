<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1>TES KESEHATAN</h1>
    <form>
        <div class="form-group row">
          <label for="text" class="col-4 col-form-label">Nama</label> 
          <div class="col-8">
            <input id="text" name="text" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="datetime" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
          <div class="col-8">
            <input id="datetime" name="date" type="date" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="date" class="col-4 col-form-label">Usia</label> 
          <div class="col-8">
            <input id="date" name="text" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Jenis Kelamin</label> 
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Perempuan"> 
              <label for="radio_0" class="custom-control-label">Perempuan</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Laki-Laki"> 
              <label for="radio_1" class="custom-control-label">Laki-Laki</label>
            </div>
          </div>
        </div> 
      
      </form>
      <hr>
      <table class="table table-hover table-bordered">
        <thead class="table-danger text-uppercase">
          <tr>
            <th>Jenis Tes</th>
            <th>Hasil Pemeriksaan</th>
            <th>Normal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Tekanan Darah</td>
            <td>110/80 mmhg</td>
            <td>120/80 mmhg</td>
          </tr>
          <tr>
            <td>Asam Urat</td>
            <td>5 mg/dl</td>
            <td>7 mg/dl</td>
          </tr>
          <tr>
            <td>Kolestrol Total</td>
            <td>190 mg/dl</td>
            <td>120/80 mg/dl</td>
          </tr>
          <tr>
            <td>Gula Darah</td>
            <td>90 mg/dl</td>
            <td>70/120 mg/dl</td>
          </tr>
        </tbody>
      </table>
</body>
</html>
