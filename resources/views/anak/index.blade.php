<x-app-layout>
    <x-slot name="header">Data Anak</x-slot>

    <div class="p-6">
        <form method="GET" class="mb-4">
            <input type="text" name="search" value="{{ $search }}"
                   placeholder="Cari nama anak"
                   class="border p-2 rounded">
            <button class="bg-green-600 text-white px-4 py-2 rounded">
                Cari
            </button>
        </form>

        <a href="{{ route('anak.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded">
            Tambah Anak
        </a>

        <table class="w-full mt-4 border">
            <tr class="bg-gray-100">
                <th>Nama</th>
                <th>Tgl Lahir</th>
                <th>JK</th>
                <th>Ibu</th>
                <th>Aksi</th>
            </tr>

            @foreach ($anaks as $anak)
            <tr>
                <td>{{ $anak->nama }}</td>
                <td>{{ $anak->tanggal_lahir }}</td>
                <td>{{ $anak->jenis_kelamin }}</td>
                <td>{{ $anak->nama_ibu }}</td>
                <td>
                    <a href="{{ route('anak.edit', $anak) }}">Edit</a>
                    |
                    <form action="{{ route('anak.destroy', $anak) }}"
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus data?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        <div class="mt-4">
            {{ $anaks->links() }}
        </div>
    </div>
</x-app-layout>
