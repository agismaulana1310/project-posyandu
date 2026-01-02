<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">

        <!-- Sidebar -->
        <aside class="w-64 bg-green-700 text-white">
            <div class="p-6 text-xl font-bold border-b border-green-600">
                Posyandu
            </div>

            <nav class="p-4 space-y-2 text-sm">

                <!-- ADMIN -->
                @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Dashboard
                    </a>
                    <a href="{{ route('anak.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Data Anak
                    </a>
                    <a href="{{ route('imunisasi.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Imunisasi
                    </a>
                    <a href="{{ route('penimbangan.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Penimbangan
                    </a>
                    <a href="#" class="block px-4 py-2 rounded hover:bg-green-600">
                        Manajemen User
                    </a>
                @endif

                <!-- KADER -->
                @if(auth()->user()->role === 'kader')
                    <a href="{{ route('kader.dashboard') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Dashboard
                    </a>
                    <a href="{{ route('anak.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Data Anak
                    </a>
                    <a href="{{ route('imunisasi.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Imunisasi
                    </a>
                    <a href="{{ route('penimbangan.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Penimbangan
                    </a>
                @endif

                <!-- ORTU -->
                @if(auth()->user()->role === 'ortu')
                    <a href="{{ route('ortu.dashboard') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Dashboard
                    </a>
                    <a href="{{ route('anak.index') }}" class="block px-4 py-2 rounded hover:bg-green-600">
                        Data Anak
                    </a>
                @endif

            </nav>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>

    </div>
</x-app-layout>
