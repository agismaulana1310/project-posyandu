<x-app-layout>
    <x-slot name="header">Data Penimbangan</x-slot>

    <div class="p-6">
        <a href="{{ route('penimbangan.create') }}"
           class="bg-green-600 text-white px-4 py-2 rounded">
            Tambah Penimbangan
        </a>

        <table class="w-full mt-4 border">
            <tr class="bg-gray-100">
                <th>Nama Anak</th>
                <th>Tanggal</th>
                <th>BB (kg)</th>
                <th>TB (cm)</th>
                <th>Aksi</th>
            </tr>

            @foreach ($penimbangans as $p)
            <tr>
                <td>{{ $p->anak->nama }}</td>
                <td>{{ $p->tanggal }}</td>
                <td>{{ $p->berat_badan }}</td>
                <td>{{ $p->tinggi_badan }}</td>
                <td>
                    <a href="{{ route('penimbangan.edit',$p) }}">Edit</a> |
                    <form action="{{ route('penimbangan.destroy',$p) }}"
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
            {{ $penimbangans->links() }}
        </div>
    </div>
</x-app-layout>
