<x-layouts.sidebar>
    <h1 class="text-2xl font-bold mb-4">Dashboard Orang Tua</h1>

    <div class="bg-white p-6 rounded shadow">
        <p class="text-gray-700">
            Selamat datang, <strong>{{ auth()->user()->name }}</strong>
        </p>
        <p class="text-gray-600 mt-2">
            Anda dapat memantau data dan perkembangan kesehatan anak.
        </p>
    </div>
</x-layouts.sidebar>
