@extends('layouts.app')

@section('title', 'Data Pasok')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="card">
            <h4 class="card-header">Data Pasok</h4>
                <div class="card-body">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="content-body">
            <a href="{{ route('pasok.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
        <br>
        <table class="table table-bordered text-center" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Distributor</th>
                    <th>Judul Buku</th>
                    <th>Jumlah</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasok as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->Distributor->nama_distributor }}</td>
                    <td>{{ $item->Buku->judul }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->tanggal->format('d M Y') }}</td>
                    <td>
                        @if ($item->created_at->format('Y-m-d') == date('Y-m-d'))
                            <form action="{{ route('pasok.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
