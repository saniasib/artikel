<x-filament::page>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md px-6 py-4 bg-white shadow-md rounded-lg">
            <h2 class="text-2xl font-bold text-center text-gray-800">Login</h2>

            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('filament.admin.auth.login') }}">
                @csrf

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        required
                        autofocus
                        class="block w-full px-4 py-2 mt-1 text-sm text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                    />
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                        class="block w-full px-4 py-2 mt-1 text-sm text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200"
                    />
                </div>

                <div class="mt-4">
                    <button
                        type="submit"
                        class="w-full px-4 py-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300"
                    >
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-filament::page>
