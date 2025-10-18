<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPF — Dokumentasi Silver Physics Festival</title>

    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <style>
        body {
        font-family: 'Poppins', sans-serif;
        background-color: #0a0a0a;
        color: #f5f5f5;
        }
        .font-display {
        font-family: 'Playfair Display', serif;
        }
        .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.875rem; /* equivalent to text-3xl */
        font-weight: 700;    /* equivalent to font-bold */
        text-align: center;  /* equivalent to text-center */
        margin-bottom: 2.5rem; /* equivalent to mb-10 */
        }
        @media (min-width: 768px) {
        .section-title {
            font-size: 2.25rem; /* equivalent to md:text-4xl */
        }
        }
    </style>
    </head>

<body class="min-h-screen flex flex-col">

    <!-- HEADER -->
    <header class="w-full bg-black/80 backdrop-blur-md border-b border-gray-800 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto flex items-center justify-between py-4 px-6">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black font-bold">S</div>
            <h1 class="font-semibold text-white text-lg tracking-wide">Silver Physics Festival</h1>
        </div>
        <nav class="hidden md:flex space-x-6 text-gray-300 text-sm">
            <a href="#tentang" class="hover:text-white">Tentang</a>
            <a href="#galeri" class="hover:text-white">Galeri</a>
            <a href="#pemenang" class="hover:text-white">Pemenang</a>
            <a href="#publikasi" class="hover:text-white">Publikasi</a>
            <a href="#kontak" class="hover:text-white">Kontak</a>
        </nav>
        </div>
    </header>

    <!-- HERO -->
    <section class="relative overflow-hidden">
        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?auto=format&fit=crop&w=1920&q=80"
            alt="Physics event"
            class="w-full h-[70vh] object-cover opacity-50">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
        <h2 class="font-display text-5xl md:text-6xl font-bold text-white drop-shadow-lg">SIPF 2025</h2>
        <p class="text-gray-300 mt-4 text-lg max-w-2xl">Dokumentasi lengkap dari Silver Physics Festival — menelusuri perjalanan, semangat, dan pencapaian para peserta dalam keanggunan hitam dan putih.</p>
        </div>
    </section>

    <!-- TENTANG -->
    <section id="tentang" class="max-w-5xl mx-auto px-6 py-20 border-b border-gray-800">
        <h3 class="font-display text-4xl text-center mb-6">Tentang Acara</h3>
        <p class="text-gray-400 text-center leading-relaxed max-w-3xl mx-auto">
        <strong>Silver Physics Festival (SIPF)</strong> adalah ajang kompetisi dan kolaborasi ilmiah nasional di bidang fisika, diadakan setiap tahun oleh komunitas sains Indonesia.
        Website ini menjadi ruang dokumentasi resmi — menyimpan momen, data, dan karya dari seluruh rangkaian kegiatan SIPF.
        </p>

        <div class="grid md:grid-cols-3 gap-8 mt-12">
        <div class="border border-gray-700 p-6 rounded-xl text-center">
            <h4 class="font-semibold text-white mb-2">Tanggal Acara</h4>
            <p class="text-gray-400">12–14 Desember 2025</p>
        </div>
        <div class="border border-gray-700 p-6 rounded-xl text-center">
            <h4 class="font-semibold text-white mb-2">Lokasi</h4>
            <p class="text-gray-400">Universitas Negeri Jakarta</p>
        </div>
        <div class="border border-gray-700 p-6 rounded-xl text-center">
            <h4 class="font-semibold text-white mb-2">Tema</h4>
            <p class="text-gray-400">"Silver Elegance — Beauty in Simplicity"</p>
        </div>
        </div>
    </section>

    <!-- GALERI -->
    <section id="galeri" class="max-w-6xl mx-auto px-6 py-20 border-b border-gray-800">
        <h3 class="font-display text-4xl text-center mb-10">Galeri Dokumentasi</h3>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
        <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?auto=format&fit=crop&w=600&q=60" class="rounded-lg border border-gray-700 hover:opacity-80 transition" alt="Galeri 1">
        <img src="https://images.unsplash.com/photo-1581091870631-7b6c1f1dbb05?auto=format&fit=crop&w=600&q=60" class="rounded-lg border border-gray-700 hover:opacity-80 transition" alt="Galeri 2">
        <img src="https://images.unsplash.com/photo-1633081345880-9cb96c6d52c8?auto=format&fit=crop&w=600&q=60" class="rounded-lg border border-gray-700 hover:opacity-80 transition" alt="Galeri 3">
        <img src="https://images.unsplash.com/photo-1522204523234-8720c09db640?auto=format&fit=crop&w=600&q=60" class="rounded-lg border border-gray-700 hover:opacity-80 transition" alt="Galeri 4">
        <img src="https://images.unsplash.com/photo-1517976487492-5750f3195933?auto=format&fit=crop&w=600&q=60" class="rounded-lg border border-gray-700 hover:opacity-80 transition" alt="Galeri 5">
        <img src="https://images.unsplash.com/photo-1509223197845-458d87318791?auto=format&fit=crop&w=600&q=60" class="rounded-lg border border-gray-700 hover:opacity-80 transition" alt="Galeri 6">
        </div>
    </section>

    <!-- PEMENANG -->
    <section id="pemenang" class="max-w-5xl mx-auto px-6 py-20 border-b border-gray-800">
        <h3 class="font-display text-4xl text-center mb-10">Daftar Pemenang</h3>
        <div class="space-y-8">
        <div>
            <h4 class="font-semibold text-white mb-2">Lomba Teori</h4>
            <ul class="text-gray-400 list-disc list-inside">
            <li>Juara 1 — Tim Newtonia, SMA Negeri 1 Bandung</li>
            <li>Juara 2 — Quantum Force, MAN Insan Cendekia</li>
            <li>Juara 3 — Photon Lab, SMA Taruna Bangsa</li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold text-white mb-2">Lomba Eksperimen</h4>
            <ul class="text-gray-400 list-disc list-inside">
            <li>Juara 1 — Team Gravitas, Universitas Indonesia</li>
            <li>Juara 2 — Magnetron, ITS Surabaya</li>
            <li>Juara 3 — ElectroNova, UGM</li>
            </ul>
        </div>
        <div>
            <h4 class="font-semibold text-white mb-2">Karya Fisika</h4>
            <ul class="text-gray-400 list-disc list-inside">
            <li>Juara 1 — “Smart Optic Lab” oleh Politeknik Bandung</li>
            <li>Juara 2 — “NanoCool Device” oleh ITB</li>
            <li>Juara 3 — “Eco-Thermal Project” oleh UNESA</li>
            </ul>
        </div>
        </div>
    </section>

    <!-- PUBLIKASI -->
    <section id="publikasi" class="max-w-5xl mx-auto px-6 py-20 border-b border-gray-800">
        <h3 class="font-display text-4xl text-center mb-10">Publikasi & Arsip</h3>
        <div class="grid md:grid-cols-2 gap-8">
        <div class="border border-gray-700 p-6 rounded-xl">
            <h4 class="font-semibold text-white mb-3">Artikel Resmi</h4>
            <p class="text-gray-400 text-sm mb-4">Baca liputan lengkap dan wawancara eksklusif dengan para pemenang SIPF 2025.</p>
            <a href="#" class="text-white font-semibold hover:underline">Buka Artikel →</a>
        </div>
        <div class="border border-gray-700 p-6 rounded-xl">
            <h4 class="font-semibold text-white mb-3">Download Dokumen</h4>
            <p class="text-gray-400 text-sm mb-4">Unduh hasil lomba, daftar juri, dan dokumentasi PDF acara lengkap.</p>
            <a href="#" class="text-white font-semibold hover:underline">Download Arsip →</a>
        </div>
        </div>
    </section>

    <!-- KONTAK -->
    <section id="kontak" class="max-w-4xl mx-auto px-6 py-20">
        <h3 class="font-display text-4xl text-center mb-10">Kontak & Informasi</h3>
        <div class="text-center text-gray-400">
        <p>Email: <a href="mailto:sipf@event.id" class="text-white hover:underline">sipf@event.id</a></p>
        <p>Instagram: <a href="https://instagram.com/sipf_event" class="text-white hover:underline">@sipf_event</a></p>
        <p>Alamat: Jl. Pendidikan No.10, Jakarta Timur</p>
        </div>
    </section>

    <!-- FOOTER -->
<footer class="mt-auto bg-black/80 border-t border-gray-800 py-6 text-center text-gray-500 text-sm">
        © 2025 SIPF — Silver Physics Festival. Semua hak cipta dilindungi.
</footer>

</body>
</html>