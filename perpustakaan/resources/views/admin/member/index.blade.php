@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-account-multiple"></i>
        </span> Daftar Anggota
      </h3>
    </div>
    <div>
        <a class="btn btn-primary mdi mdi-plus-box" href="#" role="button"> Tambah Anggota</a>
    </div>
    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Daftar Anggota Perpustakaan</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                    <tr class="table-danger text-uppercase">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($members as $member)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->gender }}</td>
                        <td>{{ $member->status }}</td>
                        <td>{{ $member->address }}</td>
                        <td>
                          <a class="btn btn-primary" href="">View</a>
                          <a class="btn btn-warning" href="">Edit</a>
                          <a class="btn btn-danger" href="" >Delete</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection