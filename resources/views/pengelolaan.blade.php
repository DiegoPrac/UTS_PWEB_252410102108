@extends('layouts.app')

@section('content')
    <h1>Catatan Perawatan TigerLog</h1>
    <p>Halo, {{ $username }}!</p>
    <p>Berikut adalah daftar pemeliharaan motor klasik.</p>

    <div class="tabel-area">
        <table class="tabel-servis">
            <thead>
                <tr>
                    <th>Komponen</th>
                    <th>Kategori</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($servis as $item)
                    <tr>
                        <td>{{ $item['komponen'] }}</td>
                        <td>{{ $item['kategori'] }}</td>
                        <td>{{ $item['status'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <p>
        <a href="/dashboard?username={{ urlencode($username) }}">
            Kembali ke Dashboard
        </a>
    </p>
@endsection
