@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Pengguna</h1>
        <hr>
        <p>Nama: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <!-- Tambahkan informasi pengguna lainnya sesuai kebutuhan -->
    </div>
@endsection
