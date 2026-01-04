<x-layouts.sidebar-ortu>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <h1 class="text-2xl font-bold mb-6">Dashboard Orang Tua</h1>

    {{-- INFORMASI ANAK --}}
    <section id="info-anak" class="bg-white p-6 rounded shadow mb-8">
        <h2 class="font-semibold text-lg mb-4">Informasi Anak</h2>

        @forelse(auth()->user()->anak as $anak)
            <div class="border-b pb-4 mb-4">
                <p><strong>Nama:</strong> {{ $anak->nama }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $anak->tanggal_lahir }}</p>
                <p><strong>Jenis Kelamin:</strong> {{ $anak->jenis_kelamin }}</p>
                <p class="text-green-600 font-semibold mt-2">
                    Status: Terpantau Posyandu
                </p>
            </div>
        @empty
            <p class="text-gray-500">
                Belum ada data anak yang terhubung dengan akun Anda.
            </p>
        @endforelse
    </section>

    {{-- EDUKASI --}}
    <section id="edukasi" class="grid md:grid-cols-3 gap-6 mb-8">

        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-semibold mb-2">🍎 Nutrisi & Gizi</h3>
            <p class="text-sm text-gray-600">
                Pastikan anak mendapatkan makanan bergizi seimbang
                seperti karbohidrat, protein, sayur, dan buah setiap hari.
            </p>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-semibold mb-2">🛁 Pola Asuh & Kebersihan</h3>
            <p class="text-sm text-gray-600">
                Jaga kebersihan anak dengan mandi teratur,
                mencuci tangan sebelum makan, dan menjaga lingkungan bersih.
            </p>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-semibold mb-2">💉 Imunisasi</h3>
            <p class="text-sm text-gray-600">
                Lengkapi imunisasi sesuai jadwal untuk mencegah
                penyakit berbahaya sejak dini.
            </p>
        </div>

    </section>

    {{-- RIWAYAT --}}
    <section class="bg-white p-6 rounded shadow mb-8">
        <h2 class="font-semibold text-lg mb-4">Riwayat Penimbangan</h2>

        @php
            $penimbangan = \App\Models\Penimbangan::whereIn(
                'anak_id',
                auth()->user()->anak->pluck('id')
            )->latest()->limit(5)->get();
        @endphp

        @forelse($penimbangan as $p)
            <p class="border-b py-2">
                {{ $p->tanggal }} —
                Berat: {{ $p->berat_badan }} kg,
                Tinggi: {{ $p->tinggi_badan }} cm
            </p>
        @empty
            <p class="text-gray-500">Belum ada data penimbangan.</p>
        @endforelse
    </section>

    {{-- GRAFIK PERTUMBUHAN --}}
    <section id="grafik" class="mb-8">
    <h1 class="text-2xl font-bold mb-6">
        Grafik Pertumbuhan Anak
    </h1>

    <div class="bg-white p-6 rounded shadow mb-6">
        <h2 class="font-semibold mb-2">
            {{ $anak->nama }}
        </h2>
        <p class="text-sm text-gray-600">
            {{ $anak->jenis_kelamin }} |
            Lahir {{ \Carbon\Carbon::parse($anak->tanggal_lahir)->format('d M Y') }}
        </p>
    </div>

    <!-- GRAFIK BERAT BADAN -->
    <div class="bg-white p-6 rounded shadow mb-8">
        <h3 class="font-semibold mb-4">Grafik Berat Badan (Kg)</h3>
        <canvas id="beratChart"></canvas>
    </div>

    <!-- GRAFIK TINGGI BADAN -->
    <div class="bg-white p-6 rounded shadow">
        <h3 class="font-semibold mb-4">Grafik Tinggi Badan (Cm)</h3>
        <canvas id="tinggiChart"></canvas>
    </div>
    </section>

    {{-- PESAN KESEHATAN --}}
    <section class="bg-blue-50 p-6 rounded shadow">
        <h2 class="font-semibold text-lg mb-2">📢 Pesan Kesehatan</h2>
        <p class="text-sm text-gray-700">
            Pantau pertumbuhan anak secara rutin di Posyandu dan
            segera konsultasikan ke petugas kesehatan jika terdapat
            perubahan berat atau tinggi badan yang tidak normal.
        </p>
    </section>

    <script>
    const labels = @json($penimbangans->pluck('tanggal'));
    const berat = @json($penimbangans->pluck('berat_badan'));
    const tinggi = @json($penimbangans->pluck('tinggi_badan'));

    // Grafik Berat
    new Chart(document.getElementById('beratChart'), {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Berat Badan (Kg)',
                data: berat,
                borderWidth: 2,
                tension: 0.4
            }]
        }
    });

    // Grafik Tinggi
    new Chart(document.getElementById('tinggiChart'), {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Tinggi Badan (Cm)',
                data: tinggi,
                borderWidth: 2,
                tension: 0.4
            }]
        }
    });
    </script>


</x-layouts.sidebar-ortu>
