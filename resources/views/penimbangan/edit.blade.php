<x-app-layout>
    <x-slot name="header">Edit Penimbangan</x-slot>

    <div class="p-6 max-w-xl mx-auto">
        <form action="{{ route('penimbangan.update',$penimbangan) }}"
              method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1 font-medium">Nama Anak</label>
                <select name="anak_id" class="w-full border rounded p-2">
                    @foreach ($anaks as $anak)
                        <option value="{{ $anak->id }}"
                          {{ $penimbangan->anak_id == $anak->id ? 'selected' : '' }}>
                          {{ $anak->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block mb-1 font-medium">Tanggal</label>
                <input type="date" name="tanggal"
                       value="{{ $penimbangan->tanggal }}"
                       class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1 font-medium">Berat Badan (kg)</label>
                <input type="number" step="0.01" name="berat_badan"
                       value="{{ $penimbangan->berat_badan }}"
                       class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1 font-medium">Tinggi Badan (cm)</label>
                <input type="number" step="0.01" name="tinggi_badan"
                       value="{{ $penimbangan->tinggi_badan }}"
                       class="w-full border rounded p-2">
            </div>

            <div>
                <label class="block mb-1 font-medium">Keterangan</label>
                <textarea name="keterangan"
                          class="w-full border rounded p-2">{{ $penimbangan->keterangan }}</textarea>
            </div>

            <div class="flex gap-3">
                <button class="bg-blue-600 text-white px-4 py-2 rounded">
                    Update
                </button>
                <a href="{{ route('penimbangan.index') }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-app-layout>

