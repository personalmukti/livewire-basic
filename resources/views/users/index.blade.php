@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
        <hr>
        @livewire('users-table')
        <hr>
    </div>
@endsection
