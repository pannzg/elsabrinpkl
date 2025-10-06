@extends('admin.layouts.app')

@section('title', 'Pengaturan')

@section('content')
<div class="container">
    <h1 class="mb-4"><i class="fas fa-cog me-2"></i> Pengaturan Website</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Nama Website</label>
            <input type="text" name="site_name" class="form-control" value="{{ old('site_name', $settings['site_name']) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Email Admin</label>
            <input type="email" name="admin_email" class="form-control" value="{{ old('admin_email', $settings['admin_email']) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Warna Tema</label>
            <input type="color" name="theme_color" class="form-control form-control-color" value="{{ old('theme_color', $settings['theme_color']) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Logo Website</label>
            <input type="file" name="logo" class="form-control">
            @if($settings['logo'])
                <div class="mt-2">
                    <img src="{{ asset('storage/'.$settings['logo']) }}" alt="Logo" width="120">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-pink">Simpan</button>
    </form>
</div>
@endsection
