@extends('user.layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="container py-5">

    <!-- Judul Halaman -->
    <div class="text-center mb-5">
        <h1 class="fw-bold" style="font-family: 'Baloo 2', cursive; color:#ff6b81;">
            Hubungi Kami 💌
        </h1>
        <p class="text-muted" style="font-size:1.1rem;">Pesanmu akan langsung terkirim via WhatsApp 📲</p>
    </div>

    <!-- Form Kontak -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded-4" style="border:3px dashed #ffb6b9; background: linear-gradient(135deg, #fff0f5, #ffe4e1);">
                <div class="card-body p-5">

                    <form id="waForm">
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Nama</label>
                            <div class="input-group">
                                <span class="input-group-text bg-pink-200 rounded-start">👤</span>
                                <input type="text" id="nama" class="form-control rounded-end" placeholder="Nama kamu" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Ukuran</label>
                            <div class="input-group">
                                <span class="input-group-text bg-pink-200 rounded-start">📏</span>
                                <select id="ukuran" class="form-control rounded-end" required>
                                    <option value="">Pilih Ukuran</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                    <option value="XXXL">XXXL</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">Pesan</label>
                            <div class="input-group">
                                <span class="input-group-text bg-pink-200 rounded-start">💬</span>
                                <textarea id="pesan" class="form-control rounded-end" rows="5" placeholder="Tulis pesanmu disini..." required></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-gradient w-100 fw-bold" style="background: #ff6b81; color:white; border-radius:50px; font-size:1.1rem;">
                            Kirim via WhatsApp 💖
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Kontak -->
    <div class="text-center mt-5">
        <h5 class="fw-bold" style="color:#ff6b81;">Atau hubungi kami langsung:</h5>
        <p class="text-muted" style="font-size:1rem;">📞 Telepon: 0812-3456-7890 | ✉ Email: info@elsabrinbutik.com</p>
        <a href="https://wa.me/628119410388" target="_blank" class="btn btn-success rounded-pill px-4 mt-3">Chat via WhatsApp</a>
    </div>
</div>

<!-- Tambahan CSS kecil -->
<style>
.input-group-text {
    border: none;
    color: #ff6b81;
}
</style>

<!-- Script Kirim ke WhatsApp -->
<script>
    document.getElementById("waForm").addEventListener("submit", function(e) {
        e.preventDefault();

        let nama = document.getElementById("nama").value;
        let ukuran = document.getElementById("ukuran").value;
        let pesan = document.getElementById("pesan").value;

        let nomor = "628119410388"; // Nomor WA Owner
        let text = `Halo, saya mau tanya/order.%0A%0A👤 Nama: ${nama}%0A📏 Ukuran: ${ukuran}%0A💬 Pesan: ${pesan}`;
        let url = `https://wa.me/${nomor}?text=${text}`;

        window.open(url, "_blank");
    });
</script>
@endsection
