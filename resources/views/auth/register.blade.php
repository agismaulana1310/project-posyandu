<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 to-blue-100 px-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">

            <!-- Header -->
            <div class="text-center mb-6">
                <div class="mx-auto w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-3">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">
                    Daftar Akun Posyandu
                </h1>
                <p class="text-gray-500 text-sm">
                    Sistem Informasi Posyandu
                </p>
            </div>

            <!-- Form Register -->
            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <!-- Nama -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Nama Lengkap
                    </label>
                    <input type="text" name="name" value="{{ old('name') }}" required autofocus
                           class="w-full mt-1 border rounded-lg p-2 focus:ring focus:ring-green-200">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Email
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" required
                           class="w-full mt-1 border rounded-lg p-2 focus:ring focus:ring-green-200">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Password
                    </label>
                    <input type="password" name="password" required
                           class="w-full mt-1 border rounded-lg p-2 focus:ring focus:ring-green-200">
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Konfirmasi Password
                    </label>
                    <input type="password" name="password_confirmation" required
                           class="w-full mt-1 border rounded-lg p-2 focus:ring focus:ring-green-200">
                </div>

                <!-- Button Register -->
                <button type="submit"
                        class="w-full bg-green-600 text-white py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                    Register
                </button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center text-sm text-gray-600">
                Sudah punya akun?
                <a href="{{ route('login') }}"
                   class="text-green-600 font-semibold hover:underline">
                    Login di sini
                </a>
            </div>

        </div>
    </div>
</x-guest-layout>
