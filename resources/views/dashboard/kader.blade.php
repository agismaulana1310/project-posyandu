<x-layouts.sidebar>
    <h1 class="text-2xl font-bold mb-4">Dashboard Kader</h1>

    <div class="bg-white p-6 rounded shadow">
        <p class="text-gray-700 mb-2">
            Selamat datang, <strong>{{ auth()->user()->name }}</strong>
        </p>
        <p class="text-gray-600">
            Silakan kelola data anak, imunisasi, dan penimbangan hari ini.
        </p>
    </div>
</x-layouts.sidebar>
