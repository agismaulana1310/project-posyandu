<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posyandu Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-green-600">
                Posyandu Digital
            </h1>

            <div class="space-x-4">
                @auth
                    @switch(auth()->user()->role)
                        @case('admin')
                            <a href="{{ route('admin.dashboard') }}"
                               class="text-green-600 font-semibold hover:text-green-700">
                                Dashboard
                            </a>
                            @break
                        @case('kader')
                            <a href="{{ route('kader.dashboard') }}"
                               class="text-green-600 font-semibold hover:text-green-700">
                                Dashboard
                            </a>
                            @break
                        @default
                            <a href="{{ route('ortu.dashboard') }}"
                               class="text-green-600 font-semibold hover:text-green-700">
                                Dashboard
                            </a>
                    @endswitch
                    
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-green-600">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="text-gray-600 hover:text-green-600">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                       class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-green-100 to-blue-100 py-24">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-4">
                Sistem Informasi Posyandu
            </h2>

            <p class="text-gray-600 text-lg mb-8">
                Kelola data anak, imunisasi, dan penimbangan secara digital
                untuk pelayanan Posyandu yang lebih efektif dan transparan.
            </p>

            @guest
                <div class="flex justify-center gap-4">
                    <a href="{{ route('login') }}"
                       class="bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition">
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                       class="bg-white border border-green-600 text-green-600 px-6 py-3 rounded-lg font-semibold hover:bg-green-50 transition">
                        Register
                    </a>
                </div>
            @endguest
        </div>
    </section>

    <!-- Feature Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-2xl font-bold text-center text-gray-800 mb-12">
                Fitur Utama Sistem
            </h3>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach([
                    ['title' => 'Data Anak', 'desc' => 'Pengelolaan data anak secara terpusat dan aman.'],
                    ['title' => 'Imunisasi', 'desc' => 'Pencatatan riwayat imunisasi anak secara sistematis.'],
                    ['title' => 'Penimbangan', 'desc' => 'Monitoring pertumbuhan anak melalui data penimbangan.'],
                ] as $feature)
                    <div class="text-center p-6 border rounded-lg hover:shadow-lg transition">
                        <h4 class="font-semibold text-lg mb-2">{{ $feature['title'] }}</h4>
                        <p class="text-gray-600 text-sm">{{ $feature['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 py-6">
        <div class="text-center text-gray-600 text-sm">
            © {{ date('Y') }} Sistem Informasi Posyandu. All rights reserved.
        </div>
    </footer>

</body>
</html>
