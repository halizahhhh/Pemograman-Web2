@extends('admin.layout.index')
@section('buku')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-book-open-page-variant"></i>
        </span> Daftar Buku
      </h3>
    </div>
    <div>
        <a class="btn btn-primary mdi mdi-plus-box" href="#" role="button"> Tambah Buku</a>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Buku Tersedia</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                    <tr class="table-danger text-uppercase">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Jumlah Tersedia</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cinta Itu Luka</td>
                        <td>10</td>
                        <td>
    <a class="btn btn-primary" href="">View</a>
    <a class="btn btn-warning" href="">Edit</a>
    <a class="btn btn-danger" href="" >Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Laut Bercerita</td>
                        <td>10</td>
                        <td>
    <a class="btn btn-primary" href="">View</a>
    <a class="btn btn-warning" href="">Edit</a>
    <a class="btn btn-danger" href="" >Delete</a>
                        </td>
                      </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection