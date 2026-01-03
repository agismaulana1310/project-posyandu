<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">

        <aside class="w-64 bg-green-700 text-white p-4">
            <h2 class="text-xl font-bold mb-4">Posyandu</h2>

            @if(auth()->user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}" class="block mb-2">Dashboard Admin</a>
            @endif

            @if(auth()->user()->role === 'kader')
                <a href="{{ route('kader.dashboard') }}" class="block mb-2">Dashboard Kader</a>
            @endif

            @if(auth()->user()->role === 'ortu')
                <a href="{{ route('ortu.dashboard') }}" class="block mb-2">Dashboard Ortu</a>
            @endif

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="mt-4 text-left">Logout</button>
            </form>
        </aside>

        <main class="flex-1 p-6">
            {{ $slot }}
        </main>

    </div>
</x-app-layout>
