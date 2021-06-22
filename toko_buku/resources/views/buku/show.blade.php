@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="card">
            <h4 class="card-header">Detail Buku</h4>
                <div class="card-body">

    <div class="content-body">
    <div class="row">
                <div class="form-group col-6">
                    <label for="judul" class="form-label">Judul Buku</label>
                    <input type="text" name="judul" value="{{ $buku->judul }}" class="form-control" placeholder="Judul buku" disabled>
                </div>

                <div class="form-group col-6">
                    <label for="noisbn" class="form-label">Nomor ISBN</label>
                    <input type="number" name="noisbn" value="{{ $buku->noisbn }}" class="form-control" placeholder="Nomor ISBN" disabled>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="penulis" class="form-label">Penulis Buku</label>
                    <input type="text" name="penulis" value="{{ $buku->penulis }}"  class="form-control" placeholder="Penulis Buku" disabled>
                </div>

                <div class="form-group col-6">
                    <label for="penerbit" class="form-label">Penerbit Buku</label>
                    <input type="text" name="penerbit" value="{{ $buku->penerbit }}" class="form-control" placeholder="Penerbit Buku" disabled>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" name="tahun" value="{{ $buku->tahun }}" class="form-control" placeholder="Tahun" disabled>
                </div>

                <div class="form-group col-6">
                    <label for="harga_pokok" class="form-label">Harga Pokok</label>
                    <input type="number" name="harga_pokok" value="{{ $buku->harga_pokok }}" class="form-control" placeholder="Harga Pokok" disabled>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input type="number" name="harga_jual" value="{{ $buku->harga_jual }}" class="form-control" placeholder="Harga Jual" disabled>
                </div>

                <div class="form-group col-3">
                    <label for="ppn" class="form-label">PPN</label>
                    <input type="number" name="ppn" value="{{ $buku->ppn }}" class="form-control" placeholder="PPN" disabled>
                </div>

                <div class="form-group col-3">
                    <label for="diskon" class="form-label">Diskon</label>
                    <input type="number" name="diskon" value="{{ $buku->diskon }}" class="form-control" placeholder="Diskon" disabled>
                </div>
            </div>
    </div>
    <br>
    <div class="back mb-3">
        <a href="{{ route('buku.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>
@endsection
