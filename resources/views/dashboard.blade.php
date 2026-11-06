@extends('layouts.app')

@section('content')
    <h1>Dashboard TigerLog</h1>
    <h2>Selamat datang di garasi, {{ $username }}!</h2>
    <p>Di sini kamu bisa melihat jurnal pemeliharaan motor klasikmu.</p>

    @include('partials.info')
    <div class="ringkasan-servis">
        <h3>Ringkasan Pemeliharaan</h3>
        <p>Jumlah catatan servis: {{ $jumlahServis }}</p>
    </div>

    <div class="motor-dashboard">
        <div>
            <h3>Honda Tiger 2000</h3>
            <p>Tahun: 1996</p>
            <p>Warna: Hijau Metalik</p>
            <p>Motor klasik yang menjadi bagian dari garasi TigerLog.</p>
        </div>
        <img src="{{ asset('images/tiger-dashboard.jpg') }}" alt="Honda Tiger 2000 Hijau">
    </div>



    <a href="/profile?username={{ urlencode($username) }}">Lihat Profile</a>
    <p>
        <a href="/pengelolaan?username={{ urlencode($username) }}">
            Lihat Catatan Pemeliharaan
        </a>
    </p>
    <p><a href="/">Kembali ke Login</a></p>
@endsection
