<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
            <input id="datetime" name="datetime" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="date" class="col-4 col-form-label">Tanggal Lahir/Usir</label> 
          <div class="col-8">
            <input id="date" name="date" type="text" class="form-control">
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
</body>
</html>
