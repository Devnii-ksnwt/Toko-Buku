@extends('layouts.app')

@section('title', 'Data Buku')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="card">
            <h4 class="card-header">Data Buku</h4>
                <div class="card-body">

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="content-body">
            <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Data</a>
        <br>
        <br>
        <table class="table table-bordered text-center" id="dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Nomor ISBN</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Harga Pokok</th>
                    <th>Harga Jual</th>
                    <th>PPN</th>
                    <th>Diskon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->noisbn }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>{{ $item->tahun }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>{{ $item->harga_pokok }}</td>
                        <td>{{ $item->harga_jual }}</td>
                        <td>{{ $item->ppn }}</td>
                        <td>{{ $item->diskon }}</td>
                        <td>
                            <form action="{{ route('buku.destroy', $item->id) }}" method="POST">
                                <a href="{{ route('buku.show', $item->id) }}" class="btn btn-info btn-sm">Lihat Data</a>
                                <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

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
