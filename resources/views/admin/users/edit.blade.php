@extends('admin.layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit User</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.users._form')

        <button type="submit" class="btn btn-pink">Update</button>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
