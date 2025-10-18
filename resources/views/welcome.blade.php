<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPF — Silver Physics Festival</title>

    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        body {
        font-family: 'Poppins', sans-serif;
        background-color: #0a0a0a;
        color: #f5f5f5;
        }
        .font-display {
        font-family: 'Playfair Display', serif;
        }
        .gradient-border {
        border-image: linear-gradient(to right, #fff, #aaa) 1;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

<!-- HEADER -->
    <header class="w-full bg-black/80 backdrop-blur-lg border-b border-gray-800 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto flex items-center justify-between py-4 px-6">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black font-bold text-sm">SIPF</div>
            <div>
            <h1 class="font-semibold text-white text-lg tracking-wide">Silver Physics Festival</h1>
            <p class="text-xs text-gray-400">Event Fisika Nasional</p>
            </div>
        </div>
        <nav class="hidden md:flex space-x-8 text-gray-300 text-sm font-semibold">
            <a href="#about" class="hover:text-white">Tentang</a>
            <a href="#kategori" class="hover:text-white">Kategori</a>
            <a href="#rundown" class="hover:text-white">Rundown</a>
            <a href="#juri" class="hover:text-white">Juri</a>
            <a href="#daftar" class="hover:text-white">Daftar</a>
            <a href="dokumentasi" class="hover:text-white">Dokumentasi</a>
        </nav>
        <a href="#daftar" class="hidden md:block bg-white text-black font-bold px-4 py-2 rounded-lg hover:bg-gray-200 transition">Daftar</a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="flex flex-col md:flex-row items-center justify-between max-w-6xl mx-auto px-6 py-16">
        <div class="md:w-1/2">
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-4">SIPF 2025</h2>
        <p class="text-gray-400 mb-6 text-lg">Kompetisi fisika nasional dengan tema <span class="font-semibold text-white">“Silver Elegance”</span> — menjelajahi keindahan ilmu dalam kesederhanaan warna hitam dan putih.</p>
        <a href="#daftar" class="inline-block bg-white text-black font-semibold px-5 py-3 rounded-lg hover:bg-gray-200 transition">Daftar Sekarang</a>
        </div>
        <div class="md:w-1/2 mt-10 md:mt-0">
        <img src="https://images.unsplash.com/photo-1605379399642-870262d3d051?auto=format&fit=crop&w=900&q=60" alt="Physics Event" class="rounded-xl shadow-xl border border-gray-700">
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="max-w-6xl mx-auto px-6 py-16 border-t border-gray-800">
        <h3 class="font-display text-3xl text-white mb-6 text-center">Tentang SIPF</h3>
        <p class="text-gray-400 text-center max-w-3xl mx-auto leading-relaxed">
        SIPF (Silver Physics Festival) adalah ajang kompetisi dan kolaborasi sains yang menantang generasi muda untuk mengasah kemampuan analitis, eksperimental, dan ilmiah. Mengangkat tema “Silver Elegance”, acara ini menggabungkan kekuatan ilmu dan estetika dalam harmoni yang elegan.
        </p>
        <div class="grid md:grid-cols-3 gap-6 mt-10">
        <div class="p-6 border border-gray-700 rounded-xl hover:bg-white/5 transition">
            <h4 class="font-semibold text-white mb-2">Visi</h4>
            <p class="text-gray-400 text-sm">Mewujudkan festival fisika nasional yang inovatif dan inspiratif.</p>
        </div>
        <div class="p-6 border border-gray-700 rounded-xl hover:bg-white/5 transition">
            <h4 class="font-semibold text-white mb-2">Misi</h4>
            <p class="text-gray-400 text-sm">Menumbuhkan kecintaan terhadap fisika dan semangat kolaboratif antar generasi muda.</p>
        </div>
        <div class="p-6 border border-gray-700 rounded-xl hover:bg-white/5 transition">
            <h4 class="font-semibold text-white mb-2">Nilai</h4>
            <p class="text-gray-400 text-sm">Inovasi, integritas, elegansi, dan dedikasi pada sains.</p>
        </div>
        </div>
    </section>

    <!-- KATEGORI -->
    <section id="kategori" class="max-w-6xl mx-auto px-6 py-16 border-t border-gray-800">
        <h3 class="font-display text-3xl text-white mb-8 text-center">Kategori Lomba</h3>
        <div class="grid md:grid-cols-3 gap-8">
        <div class="p-6 border border-gray-700 rounded-xl hover:bg-white/5 transition">
            <h4 class="font-semibold text-white mb-3">1. Lomba Teori</h4>
            <p class="text-gray-400 text-sm">Ujian teori fisika mencakup konsep mekanika, listrik, optik, dan termodinamika.</p>
        </div>
        <div class="p-6 border border-gray-700 rounded-xl hover:bg-white/5 transition">
            <h4 class="font-semibold text-white mb-3">2. Lomba Eksperimen</h4>
            <p class="text-gray-400 text-sm">Tim peserta merancang dan mempresentasikan hasil eksperimen ilmiah mereka.</p>
        </div>
        <div class="p-6 border border-gray-700 rounded-xl hover:bg-white/5 transition">
            <h4 class="font-semibold text-white mb-3">3. Karya Fisika</h4>
            <p class="text-gray-400 text-sm">Peserta menampilkan proyek fisika inovatif dan aplikatif yang berdampak positif.</p>
        </div>
        </div>
    </section>

    <!-- RUNDOWN -->
    <section id="rundown" class="max-w-6xl mx-auto px-6 py-16 border-t border-gray-800">
        <h3 class="font-display text-3xl text-white mb-8 text-center">Rundown Acara</h3>
        <div class="max-w-3xl mx-auto space-y-6">
        <div class="border-l-4 border-white pl-6">
            <h4 class="font-semibold text-white">12 Desember 2025</h4>
            <p class="text-gray-400 text-sm">Registrasi, pembukaan, dan sesi teori awal.</p>
        </div>
        <div class="border-l-4 border-white pl-6">
            <h4 class="font-semibold text-white">13 Desember 2025</h4>
            <p class="text-gray-400 text-sm">Babak eksperimen dan presentasi karya.</p>
        </div>
        <div class="border-l-4 border-white pl-6">
            <h4 class="font-semibold text-white">14 Desember 2025</h4>
            <p class="text-gray-400 text-sm">Final teori, awarding, dan penutupan.</p>
        </div>
        </div>
    </section>

    <!-- JURI -->
    <section id="juri" class="max-w-6xl mx-auto px-6 py-16 border-t border-gray-800">
        <h3 class="font-display text-3xl text-white mb-8 text-center">Juri & Panitia</h3>
        <div class="grid md:grid-cols-3 gap-8 text-center">
        <div class="p-6 border border-gray-700 rounded-xl hover:bg-white/5 transition">
            <div class="w-24 h-24 mx-auto rounded-full bg-gray-200 text-black flex items-center justify-center font-bold text-xl">A</div>
            <h5 class="text-white font-semibold mt-3">Dr. Adi Putra</h5>
            <p class="text-gray-400 text-sm">Ketua Juri</p>
        </div>
        <div class="p-6 border border-gray-700 rounded-xl hover:bg-white/5 transition">
            <div class="w-24 h-24 mx-auto rounded-full bg-gray-200 text-black flex items-center justify-center font-bold text-xl">B</div>
            <h5 class="text-white font-semibold mt-3">Prof. Budi W.</h5>
            <p class="text-gray-400 text-sm">Juri Eksperimen</p>
        </div>
        <div class="p-6 border border-gray-700 rounded-xl hover:bg-white/5 transition">
            <div class="w-24 h-24 mx-auto rounded-full bg-gray-200 text-black flex items-center justify-center font-bold text-xl">C</div>
            <h5 class="text-white font-semibold mt-3">Ms. Citra</h5>
            <p class="text-gray-400 text-sm">Koordinator Acara</p>
        </div>
        </div>
    </section>

    <!-- FORM PENDAFTARAN -->
    <section id="daftar" class="max-w-4xl mx-auto px-6 py-16 border-t border-gray-800">
        <h3 class="font-display text-3xl text-white mb-8 text-center">Form Pendaftaran</h3>
        <form class="space-y-6">
        <div>
            <label class="block text-gray-300 text-sm font-semibold mb-2">Nama Tim / Peserta</label>
            <input type="text" class="w-full px-4 py-3 bg-black border border-gray-700 rounded-lg text-white focus:border-white outline-none" placeholder="Nama Tim atau Peserta">
        </div>
        <div>
            <label class="block text-gray-300 text-sm font-semibold mb-2">Email</label>
            <input type="email" class="w-full px-4 py-3 bg-black border border-gray-700 rounded-lg text-white focus:border-white outline-none" placeholder="email@contoh.com">
        </div>
        <div>
            <label class="block text-gray-300 text-sm font-semibold mb-2">Kategori</label>
            <select class="w-full px-4 py-3 bg-black border border-gray-700 rounded-lg text-white focus:border-white outline-none">
            <option>Pilih kategori</option>
            <option>Teori</option>
            <option>Eksperimen</option>
            <option>Karya Fisika</option>
            </select>
        </div>
        <div>
            <label class="block text-gray-300 text-sm font-semibold mb-2">Asal Institusi</label>
            <input type="text" class="w-full px-4 py-3 bg-black border border-gray-700 rounded-lg text-white focus:border-white outline-none" placeholder="Nama sekolah/universitas">
        </div>
        <button class="w-full bg-white text-black font-bold py-3 rounded-lg hover:bg-gray-200 transition">Kirim Pendaftaran</button>
        </form>
    </section>

<!-- FOOTER -->
<footer class="mt-auto bg-black/80 border-t border-gray-800 py-6 text-center text-gray-400 text-sm">
    © 2025 SIPF — Silver Physics Festival. Designed with ♥ in Black & White.
</footer>

</body>
</html>
