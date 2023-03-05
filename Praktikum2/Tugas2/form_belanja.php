<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
    <h2>Belanja Online </h2>
	<div class="row">
		<div class="col-md-8">
        <form action="form_hasil.php" method="POST">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                <label for="produk_1" class="custom-control-label">Kulkas</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="kirim" type="kirim" class="btn btn-success">kirim</button>
            </div>
        </div>
        </form>
		</div>
		<div class="col-md-4">
        <table class= "table table-bordered">
                <tr class= "table-success">
                    <td>Daftar Harga</td>
                </tr>
                <tr>
                    <td>Tv : 4.200.000</td>
                </tr>
                <tr>
                    <td>Kulkas : 3.100.000</td>
                </tr>
                <tr>
                    <td>Mesin Cuci : 3.800.000</td>
                </tr>
                <tr class= "table-success">
                    <td>Harga dapat berubah setiap saat!</td>
                </tr>
            </table>
		</div>
	</div>
</div>
</body>
</html>