@extends('layouts.app')

@section('title', 'Data User')

@section('content')
<div class="container">
        <div class="card">
            <h4 class="card-header">Data User</h4>
                <div class="card-body">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="content-body">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
        <br> <br>
        <table class="table table-bordered text-center" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Status</th>
                    <th>Username</th>
                    <th>Akses</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->telpon }}</td>
                        <td>
                            @if ($item->status == "aktif")
                                <i class="fas fa-check-circle text-success"></i>
                            @else
                                <i class="fas fa-check-circle text-danger"></i>
                            @endif
                        </td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->akses }}</td>
                        <td>
                            <form action="{{ route('user.destroy', $item->id) }}" method="POST">
                                <a href="{{ route('user.show', $item->id) }}" class="btn btn-info btn-sm">Lihat Data</a>
                                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
