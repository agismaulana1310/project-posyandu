<x-app-layout>
    <x-slot name="header">Tambah Penimbangan</x-slot>

    <div class="p-6 max-w-xl mx-auto">
        <form action="{{ route('penimbangan.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block mb-1 font-medium">Nama Anak</label>
                <select name="anak_id" class="w-full border rounded p-2">
                    <option value="">-- Pilih Anak --</option>
                    @foreach ($anaks as $anak)
                        <option value="{{ $anak->id }}">{{ $anak->nama }}</option>
                    @endforeach
                </select>
                @error('anak_id') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Tanggal</label>
                <input type="date" name="tanggal" class="w-full border rounded p-2">
                @error('tanggal') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Berat Badan (kg)</label>
                <input type="number" step="0.01" name="berat_badan"
                       class="w-full border rounded p-2">
                @error('berat_badan') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Tinggi Badan (cm)</label>
                <input type="number" step="0.01" name="tinggi_badan"
                       class="w-full border rounded p-2">
                @error('tinggi_badan') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Keterangan</label>
                <textarea name="keterangan" class="w-full border rounded p-2"></textarea>
            </div>

            <div class="flex gap-3">
                <button class="bg-green-600 text-white px-4 py-2 rounded">
                    Simpan
                </button>
                <a href="{{ route('penimbangan.index') }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
