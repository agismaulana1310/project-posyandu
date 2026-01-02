<x-layouts.sidebar>
    <h1 class="text-2xl font-bold mb-4">Dashboard Admin</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded shadow">
            <p class="text-sm text-gray-500">Total Anak</p>
            <p class="text-2xl font-bold">{{ \App\Models\Anak::count() }}</p>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <p class="text-sm text-gray-500">Total Imunisasi</p>
            <p class="text-2xl font-bold">{{ \App\Models\Imunisasi::count() }}</p>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <p class="text-sm text-gray-500">Total Penimbangan</p>
            <p class="text-2xl font-bold">{{ \App\Models\Penimbangan::count() }}</p>
        </div>
    </div>
</x-layouts.sidebar>
