@extends('admin.layouts.app')

@section('title', 'Tambah User')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah User</h1>

    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        @include('admin.users._form')

        <button type="submit" class="btn btn-pink">Simpan</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
