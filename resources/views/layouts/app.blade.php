<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Festival Teknologi 2025</title>
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4f4b8b3b5b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">

    <!-- Navbar -->
    <header class="fixed w-full bg-gray-800/80 backdrop-blur-md shadow-lg z-50">
        <nav class="flex justify-between items-center px-6 py-4">
            <a href="/" class="text-emerald-400 font-bold text-lg">Festival Teknologi 2025</a>
            <ul class="hidden md:flex gap-6">
                <li><a href="/" class="hover:text-emerald-400">Beranda</a></li>
                <li><a href="/about" class="hover:text-emerald-400">Tentang</a></li>
                <li><a href="/committee" class="hover:text-emerald-400">Kepanitiaan</a></li>
                <li><a href="/rundown" class="hover:text-emerald-400">Rundown</a></li>
                <li><a href="/gallery" class="hover:text-emerald-400">Galeri</a></li>
                <li><a href="/contact" class="hover:text-emerald-400">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer class="text-center py-8 border-t border-gray-700 mt-10">
        <p>&copy; 2025 Festival Teknologi 2025 | All Rights Reserved</p>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
