@extends('layouts.app')

@section('content')
    <div class="login-container">
        <div class="login-teks">
            <h1>Selamat datang di TigerLog</h1>
            <p>Jurnal pemeliharaan motor klasik, dari garasi untuk setiap perjalanan.</p>
            <h3>Masuk ke Garasi</h3>

            <form action="/dashboard" method="GET" class="login-form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <button type="submit">Masuk</button>
            </form>
        </div>
        <div class="foto-tiger">
            <img src="{{ asset('images/tiger-login-portrait.jpg') }}" alt="Honda Tiger 2000">
        </div>
    </div>
@endsection
