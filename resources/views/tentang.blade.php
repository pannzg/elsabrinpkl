@extends('user.layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container py-5">
    <!-- Judul -->
    <div class="text-center mb-5">
        <h1 class="fw-bold" style="font-family: 'Baloo 2', cursive; color:#ff6b81;">
            Tentang Elsabrin Butik
        </h1>
        <div style="font-size:2rem; color:#ff9aa2;">
            👗 👜 👒 🧕
        </div>
    </div>

    <!-- Box Deskripsi -->
    <div class="p-4 p-md-5 mx-auto" 
         style="max-width:800px; background:rgba(255,154,162,0.15); border-radius:25px; box-shadow:0 6px 18px rgba(0,0,0,0.08);">
        
        <p style="font-size:1.1rem; line-height:1.8; color:#444; margin-bottom:20px;">
            <span style="font-family:'Baloo 2', cursive; color:#ff6b81; font-weight:600;">
                Elsabrin Butik
            </span> adalah tempat fashion pilihan untuk wanita modern
            yang menginginkan gaya <b>elegan</b>, <b>anggun</b>, dan tetap nyaman.
            Kami menyediakan berbagai koleksi busana muslim, gamis,
            dress, hingga tunik dengan bahan berkualitas tinggi 👗.
        </p>

        <p style="font-size:1.1rem; line-height:1.8; color:#444;">
            Dengan mengutamakan <b>kualitas</b>, <b>pelayanan ramah</b>, dan
            <b>desain yang mengikuti tren</b>, 
            <span style="color:#ff6b81; font-weight:600;">Elsabrin Butik</span> hadir
            untuk membuat setiap momen Anda lebih percaya diri 🌸✨.
        </p>

        <!-- Ikon tambahan di bawah -->
        <div class="text-center mt-4" style="font-size:2rem; color:#ff6b81;">
            🧥 👡 🧕 💄
        </div>
    </div>
</div>
@endsection
