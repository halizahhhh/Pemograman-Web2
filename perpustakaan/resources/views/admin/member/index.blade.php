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
        <a class="btn btn-primary mdi mdi-plus-box" href="{{ url('dashboard/member/create') }}" role="button"> Tambah Anggota</a>
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
                        <th>Email</th>
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
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->gender }}</td>
                        <td>{{ $member->status }}</td>
                        <td>{{ $member->address }}</td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="">View</a>
                          <a class="btn btn-warning btn-sm" href="">Edit</a>
                          <form action="{{ url('/dashboard/member/destroy', $member->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"
                            onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$member['name']?>?')) {return false}">Delete</button>
                        </form>
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