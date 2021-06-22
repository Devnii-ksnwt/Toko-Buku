@extends('layouts.app')

@section('title', 'Detail User')

@section('content')
<div class="container">
        <div class="card">
            <h4 class="card-header">Detail User</h4>
                <div class="card-body">
    <div class="content-body">
        <div class="row">
            <div class="form-group col-6">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ $users->nama }}" class="form-control" disabled>
            </div>

            <div class="form-group col-6">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ $users->alamat }}" class="form-control" disabled>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-6">
                <label>Nomor Telepon</label>
                <input type="text" name="telpon" value="{{ $users->telpon }}" class="form-control" disabled>
            </div>

            <div class="form-group col-6">
                <label>Status</label>
                <select name="status" class="form-control" disabled>
                    <option selected disabled>-- Pilih Status --</option>
                    <option value="aktif" @if ($users->status == 'aktif') selected @endif>Aktif</option>
                    <option value="tidak aktif" @if ($users->status == 'tidak aktif') selected @endif>Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label>Username</label>
                <input type="text" name="usename" value="{{ $users->username }}" class="form-control" disabled>
            </div>

            <div class="form-group col-md-6">
                <label>Akses</label>
                <select name="akses" class="form-control" disabled>
                    <option selected disabled>-- Pilih Akses --</option>
                    <option value="admin" @if ($users->akses == 'admin') selected @endif>Admin</option>
                    <option value="kasir" @if ($users->akses == 'kasir') selected @endif>Kasir</option>
                    <option value="manager" @if ($users->akses == 'manager') selected @endif>Manager</option>
                </select>
            </div>
        </div>
    <br>
    <div class="back mb-3">
        <a href="{{ route('user.index') }}" class="btn btn-primary">Back</a>
    </div>
    </div>
</div>
@endsection
