<x-filament-panels::page>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
            <h2 class="text-2xl font-bold text-center mb-4">Login</h2>

            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                    <strong>Error:</strong> {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input id="email" type="email" name="email" class="w-full px-3 py-2 border rounded" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input id="password" type="password" name="password" class="w-full px-3 py-2 border rounded" required>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
                </div>
            </form>
        </div>
    </div>
</x-filament-panels::page>
