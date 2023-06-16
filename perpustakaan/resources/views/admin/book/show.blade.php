@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-book-open-page-variant"></i>
        </span> Daftar Buku
      </h3>
    </div>
    <div>
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
                        <th>id</th>
                        <th>Judul</th>
                        <th>Jumlah Tersedia</th>
                        <th>ISBN</th>
                        <th>Data dibuat pada</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->stok }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->created_at }}</td>
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