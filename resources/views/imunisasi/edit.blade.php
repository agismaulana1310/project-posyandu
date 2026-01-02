<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Edit Data Imunisasi</h2>
    </x-slot>

    <div class="p-6 max-w-xl mx-auto">
        <form action="{{ route('imunisasi.update', $imunisasi) }}"
              method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Pilih Anak -->
            <div>
                <label class="block mb-1 font-medium">Nama Anak</label>
                <select name="anak_id" class="w-full border rounded p-2">
                    @foreach ($anaks as $anak)
                        <option value="{{ $anak->id }}"
                            {{ old('anak_id', $imunisasi->anak_id) == $anak->id ? 'selected' : '' }}>
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
                       value="{{ old('jenis_imunisasi', $imunisasi->jenis_imunisasi) }}"
                       class="w-full border rounded p-2">
                @error('jenis_imunisasi')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tanggal Imunisasi -->
            <div>
                <label class="block mb-1 font-medium">Tanggal Imunisasi</label>
                <input type="date" name="tanggal"
                       value="{{ old('tanggal', $imunisasi->tanggal) }}"
                       class="w-full border rounded p-2">
                @error('tanggal')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Keterangan -->
            <div>
                <label class="block mb-1 font-medium">Keterangan</label>
                <textarea name="keterangan"
                          class="w-full border rounded p-2">{{ old('keterangan', $imunisasi->keterangan) }}</textarea>
                @error('keterangan')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex gap-3">
                <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded">
                    Update
                </button>
                <a href="{{ route('imunisasi.index') }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
