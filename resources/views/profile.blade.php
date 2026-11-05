@extends('layouts.app')

@section('content')
    <h1>Profile Garage</h1>
    <h2>Pemilik: {{ $username }}</h2>

    <div class="kartu-profile">
        <div class="data-profile">
            <h3>Motor Kesayangan</h3>
            <p>Nama Motor: Honda Tiger 2000</p>
            <p>Tahun: 1996</p>
            <p>Warna: Hijau Metalik</p>
            <p>Kategori: Motor Klasik</p>
        </div>

        <div class="foto-profile">
            <img src="{{ asset('images/tiger-profile.jpg') }}" alt="Honda Tiger 2000">
        </div>
    </div>

    <p>
        <a href="/dashboard?username={{ urlencode($username) }}">
            Kembali ke Dashboard
        </a>
    </p>
@endsection
