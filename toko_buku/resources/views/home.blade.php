@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->akses=='admin')
                        {{ __('Selamat Datang Admin!') }}
                    @endif
                    @if (Auth::user()->akses=='manager')
                        {{ __('Selamat Datang Manager!') }}
                    @endif
                    @if (Auth::user()->akses=='kasir')
                        {{ __('Selamat Datang Kasir!') }}
                    @endif
                </div>
                <br>
                <br>
                <div class="panel panel-default" align="center">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="logo-beranda"> <img class="img-responsive" src="{{ ('images/book.svg') }}" width="300"> </div>
                                <br>
                                <br>
                                <h3 class="fw-bold">( BOOK STORE )</h3>
                                <h6>Cantumkan dan analisis</h6>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
