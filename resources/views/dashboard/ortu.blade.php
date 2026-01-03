<x-layouts.sidebar>
    <h1 class="text-2xl font-bold mb-6">Dashboard Orang Tua</h1>

    <div class="grid md:grid-cols-2 gap-6">

        {{-- Data Anak --}}
        <div class="bg-white p-6 rounded shadow">
            <h2 class="font-semibold mb-4">Data Anak Saya</h2>

            @forelse(auth()->user()->anak as $anak)
                <div class="border-b pb-3 mb-3">
                    <p><strong>Nama:</strong> {{ $anak->nama }}</p>
                    <p><strong>Tgl Lahir:</strong> {{ $anak->tanggal_lahir }}</p>
                    <p><strong>JK:</strong> {{ $anak->jenis_kelamin }}</p>
                </div>
            @empty
                <p class="text-gray-500">Belum ada data anak.</p>
            @endforelse
        </div>

        {{-- Riwayat Penimbangan --}}
        <div class="bg-white p-6 rounded shadow">
            <h2 class="font-semibold mb-4">Riwayat Penimbangan</h2>

            @php
                $penimbangan = \App\Models\Penimbangan::whereIn(
                    'anak_id',
                    auth()->user()->anak->pluck('id')
                )->latest()->limit(5)->get();
            @endphp

            @forelse($penimbangan as $p)
                <p class="border-b py-2">
                    {{ $p->tanggal }} —
                    Berat: {{ $p->berat }} kg,
                    Tinggi: {{ $p->tinggi }} cm
                </p>
            @empty
                <p class="text-gray-500">Belum ada data penimbangan.</p>
            @endforelse
        </div>

    </div>
</x-layouts.sidebar>
