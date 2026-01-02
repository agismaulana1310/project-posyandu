<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">Tambah Data Anak</h2>
    </x-slot>

    <div class="p-6 max-w-xl mx-auto">
        <form action="{{ route('anak.store') }}" method="POST" class="space-y-4">
            @csrf

            <!-- Nama Anak -->
            <div>
                <label class="block mb-1 font-medium">Nama Anak</label>
                <input type="text" name="nama" value="{{ old('nama') }}"
                       class="w-full border rounded p-2">
                @error('nama')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tanggal Lahir -->
            <div>
                <label class="block mb-1 font-medium">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                       class="w-full border rounded p-2">
                @error('tanggal_lahir')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Jenis Kelamin -->
            <div>
                <label class="block mb-1 font-medium">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="w-full border rounded p-2">
                    <option value="">-- Pilih --</option>
                    <option value="L" {{ old('jenis_kelamin')=='L' ? 'selected' : '' }}>
                        Laki-laki
                    </option>
                    <option value="P" {{ old('jenis_kelamin')=='P' ? 'selected' : '' }}>
                        Perempuan
                    </option>
                </select>
                @error('jenis_kelamin')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Nama Ibu -->
            <div>
                <label class="block mb-1 font-medium">Nama Ibu</label>
                <input type="text" name="nama_ibu" value="{{ old('nama_ibu') }}"
                       class="w-full border rounded p-2">
                @error('nama_ibu')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex gap-3">
                <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded">
                    Simpan
                </button>
                <a href="{{ route('anak.index') }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
