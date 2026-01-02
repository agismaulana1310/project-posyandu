<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Tambah Data Imunisasi</h2>
    </x-slot>

    <div class="p-6 max-w-xl mx-auto">
        <form action="{{ route('imunisasi.store') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Pilih Anak -->
            <div>
                <label class="block mb-1 font-medium">Nama Anak</label>
                <select name="anak_id" class="w-full border rounded p-2">
                    <option value="">-- Pilih Anak --</option>
                    @foreach ($anaks as $anak)
                        <option value="{{ $anak->id }}"
                            {{ old('anak_id') == $anak->id ? 'selected' : '' }}>
                            {{ $anak->nama }}
                        </option>
                    @endforeach
                </select>
                @error('anak_id')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Jenis Imunisasi -->
            <div>
                <label class="block mb-1 font-medium">Jenis Imunisasi</label>
                <input type="text" name="jenis_imunisasi"
                       value="{{ old('jenis_imunisasi') }}"
                       placeholder="Contoh: BCG, Polio, DPT"
                       class="w-full border rounded p-2">
                @error('jenis_imunisasi')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tanggal Imunisasi -->
            <div>
                <label class="block mb-1 font-medium">Tanggal Imunisasi</label>
                <input type="date" name="tanggal"
                       value="{{ old('tanggal') }}"
                       class="w-full border rounded p-2">
                @error('tanggal')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Keterangan -->
            <div>
                <label class="block mb-1 font-medium">Keterangan</label>
                <textarea name="keterangan"
                          class="w-full border rounded p-2"
                          placeholder="Opsional">{{ old('keterangan') }}</textarea>
                @error('keterangan')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex gap-3">
                <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded">
                    Simpan
                </button>
                <a href="{{ route('imunisasi.index') }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
