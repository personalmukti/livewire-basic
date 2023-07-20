@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Pengguna</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <!-- Tambahkan input dan field lain untuk formulir tambah user -->
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
