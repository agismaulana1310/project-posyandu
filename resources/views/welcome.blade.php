<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Posyandu Digital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-50">

<!-- NAVBAR -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <span class="text-2xl font-bold text-green-700">Posyandu</span>
            <span class="text-sm text-gray-500">Digital</span>
        </div>

        <nav class="flex items-center gap-4 text-sm font-medium">
            <a href="/" class="text-green-700">Beranda</a>

            @auth
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="text-gray-600 hover:text-green-600">
                Logout
                </button>
            </form>
            @else
            <a href="{{ route('login') }}" class="text-gray-600 hover:text-green-600">
                Login
            </a>
            <a href="{{ route('register') }}"
               class="bg-green-600 text-white px-4 py-2 rounded-lg">
                Daftar
            </a>
            @endauth
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="bg-gradient-to-r from-green-100 to-green-50 py-20">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-green-800 mb-4">
                Selamat Datang di Posyandu Digital
            </h1>

            <p class="text-gray-700 text-lg mb-6">
                Posyandu Digital membantu orang tua dan kader
                memantau tumbuh kembang anak secara mudah,
                aman, dan terintegrasi.
            </p>

            <div class="flex gap-4">
                <a href="{{ route('login') }}"
                   class="bg-green-600 text-white px-6 py-3 rounded-lg font-semibold">
                    Masuk
                </a>
                <a href="{{ route('register') }}"
                   class="border border-green-600 text-green-600 px-6 py-3 rounded-lg font-semibold">
                    Daftar Akun
                </a>
            </div>
        </div>

        <div class="hidden md:block">
            <img src="https://img.freepik.com/free-vector/mother-holding-baby-illustration_74855-14411.jpg"
                 alt="Posyandu"
                 class="rounded-xl shadow">
        </div>

    </div>
</section>

<!-- LAYANAN POSYANDU -->
<section class="max-w-7xl mx-auto px-6 py-16">
    <h2 class="text-2xl font-bold text-center text-green-800 mb-10">
        Layanan Posyandu
    </h2>

    <div class="grid md:grid-cols-4 gap-6 text-center">

        <div class="bg-white p-6 rounded-xl shadow">
            <p class="text-4xl mb-2">👶</p>
            <h3 class="font-semibold mb-2">Data Anak</h3>
            <p class="text-sm text-gray-600">
                Pendataan anak secara terpusat dan aman.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <p class="text-4xl mb-2">⚖️</p>
            <h3 class="font-semibold mb-2">Penimbangan</h3>
            <p class="text-sm text-gray-600">
                Pemantauan berat dan tinggi badan anak.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <p class="text-4xl mb-2">💉</p>
            <h3 class="font-semibold mb-2">Imunisasi</h3>
            <p class="text-sm text-gray-600">
                Catatan imunisasi sesuai jadwal Posyandu.
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <p class="text-4xl mb-2">📊</p>
            <h3 class="font-semibold mb-2">Monitoring</h3>
            <p class="text-sm text-gray-600">
                Grafik pertumbuhan anak secara visual.
            </p>
        </div>

    </div>
</section>

<!-- EDUKASI -->
<section class="bg-green-100 py-14">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-xl font-bold text-green-800 mb-6">
            Edukasi Kesehatan Anak
        </h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="bg-white p-6 rounded shadow">
                <h3 class="font-semibold mb-2">🍎 Gizi Seimbang</h3>
                <p class="text-sm text-gray-600">
                    Pastikan anak mendapat asupan gizi yang cukup
                    untuk mendukung pertumbuhan optimal.
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h3 class="font-semibold mb-2">🛁 Kebersihan</h3>
                <p class="text-sm text-gray-600">
                    Jaga kebersihan anak dan lingkungan
                    untuk mencegah penyakit.
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow">
                <h3 class="font-semibold mb-2">💉 Imunisasi</h3>
                <p class="text-sm text-gray-600">
                    Lengkapi imunisasi anak sesuai jadwal
                    yang dianjurkan Posyandu.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-green-700 py-6">
    <div class="text-center text-sm text-white">
        © {{ date('Y') }} Posyandu Digital — Untuk Ibu & Anak
    </div>
</footer>

</body>
</html>
