@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="container">
        <div class="card">
            <h4 class="card-header">Edit Buku</h4>
                <div class="card-body">

    <div class="content-body">
    <form action="{{ route('buku.store') }}" method="POST">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="form-group col-6">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" value="{{ $buku->judul }}" class="form-control" placeholder="Judul buku">
                </div>

                <div class="form-group col-6">
                    <label for="noisbn" class="form-label">Nomor ISBN</label>
                    <input type="number" name="noisbn" value="{{ $buku->noisbn }}" class="form-control" placeholder="Nomor ISBN">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="penulis" class="form-label">Penulis Buku</label>
                    <input type="text" name="penulis" value="{{ $buku->penulis }}"  class="form-control" placeholder="Penulis Buku">
                </div>

                <div class="form-group col-6">
                    <label for="penerbit" class="form-label">Penerbit Buku</label>
                    <input type="text" name="penerbit" value="{{ $buku->penerbit }}" class="form-control" placeholder="Penerbit Buku">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" name="tahun" value="{{ $buku->tahun }}" class="form-control" placeholder="Tahun">
                </div>

                <div class="form-group col-6">
                    <label for="harga_pokok" class="form-label">Harga Pokok</label>
                    <input type="number" name="harga_pokok" value="{{ $buku->harga_pokok }}" class="form-control" placeholder="Harga Pokok">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input type="number" name="harga_jual" value="{{ $buku->harga_jual }}" class="form-control" placeholder="Harga Jual">
                </div>

                <div class="form-group col-3">
                    <label for="ppn" class="form-label">PPN</label>
                    <input type="number" name="ppn" value="{{ $buku->ppn }}" class="form-control" placeholder="PPN">
                </div>

                <div class="form-group col-3">
                    <label for="diskon" class="form-label">Diskon</label>
                    <input type="number" name="diskon" value="{{ $buku->diskon }}" class="form-control" placeholder="Diskon">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
