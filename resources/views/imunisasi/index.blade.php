<x-app-layout>
    <x-slot name="header">Data Imunisasi</x-slot>

    <div class="p-6">
        <a href="{{ route('imunisasi.create') }}"
           class="bg-green-600 text-white px-4 py-2 rounded">
            Tambah Imunisasi
        </a>

        <table class="w-full mt-4 border">
            <tr class="bg-gray-100">
                <th>Nama Anak</th>
                <th>Jenis</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>

            @foreach ($imunisasis as $imunisasi)
            <tr>
                <td>{{ $imunisasi->anak->nama }}</td>
                <td>{{ $imunisasi->jenis_imunisasi }}</td>
                <td>{{ $imunisasi->tanggal }}</td>
                <td>{{ $imunisasi->keterangan }}</td>
                <td>
                    <a href="{{ route('imunisasi.edit',$imunisasi) }}">Edit</a>
                    |
                    <form action="{{ route('imunisasi.destroy',$imunisasi) }}"
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        <div class="mt-4">
            {{ $imunisasis->links() }}
        </div>
    </div>
</x-app-layout>
