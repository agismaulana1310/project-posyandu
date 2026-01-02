<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 to-blue-100 px-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">

            <!-- Header -->
            <div class="text-center mb-6">
                <div class="mx-auto w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-3">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6v6l4 2"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">
                    Login Posyandu
                </h1>
                <p class="text-gray-500 text-sm">
                    Sistem Informasi Posyandu
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Form Login -->
            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Email
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           required autofocus
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

                <!-- Remember Me -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember"
                               class="rounded border-gray-300 text-green-600">
                        <span class="ml-2 text-gray-600">Ingat saya</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                           class="text-green-600 hover:underline">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <!-- Button Login -->
                <button type="submit"
                        class="w-full bg-green-600 text-white py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                    Login
                </button>
            </form>

            <!-- Register Link -->
            <div class="mt-6 text-center text-sm text-gray-600">
                Belum punya akun?
                <a href="{{ route('register') }}"
                   class="text-green-600 font-semibold hover:underline">
                    Daftar di sini
                </a>
            </div>

        </div>
    </div>
</x-guest-layout>
