<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Orang Tua</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- WAJIB ADA --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="fixed left-0 top-0 h-screen w-64 bg-green-700 text-white p-6 overflow-y-auto">
        <h2 class="text-xl font-bold mb-8">Posyandu</h2>

        <ul class="space-y-4">
            <li>
                <a href="{{ route('ortu.dashboard') }}"
                   class="block hover:bg-green-600 px-3 py-2 rounded">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="#info-anak"
                   class="block hover:bg-green-600 px-3 py-2 rounded">
                    Informasi Anak
                </a>
            </li>

            <li>
                <a href="#edukasi"
                   class="block hover:bg-green-600 px-3 py-2 rounded">
                    Edukasi Kesehatan
                </a>
            </li>

            <li>
                <a href="#grafik"
                   class="block hover:bg-green-600 px-3 py-2 rounded">
                    Grafik Pertumbuhan
                </a>
            </li>

            <li class="pt-6 border-t border-green-600">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full text-left hover:bg-green-600 px-3 py-2 rounded">
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- CONTENT -->
    <main class="ml-64 flex-1 p-8">
        {{ $slot }}
    </main>

</div>

</body>
</html>
