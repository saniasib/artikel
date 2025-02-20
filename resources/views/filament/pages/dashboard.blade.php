<x-filament-panels::page>
    <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-1">
        <!-- Kartu Statistik User -->


        <!-- Kartu Latest Users -->
        <x-filament::card class="h-full">
            <div class="h-12 flex items-center space-x-4">
                <x-heroicon-o-clipboard-document-check class="h-6 w-6 text-gray-500" />
                <div class="text-lg font-medium">Latest History Detection</div>
            </div>

            <div class="mt-2 space-y-4">
                @foreach (\App\Models\History::latest()->take(5)->get() as $history)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="text-sm">
                                {{ $history->hd_ch_name }}
                                <div class="text-xs text-gray-500">
                                    {{ $history->hd_result_detect }}
                                </div>
                            </div>
                        </div>
                        <div class="text-xs text-gray-500">
                            {{ $history->created_at->diffForHumans() }}
                        </div>
                    </div>
                @endforeach
            </div>
        </x-filament::card>

        <x-filament::card class="h-full">
            <div class="h-12 flex items-center space-x-4">
                <x-heroicon-o-users class="h-6 w-6 text-gray-500" />
                <div class="text-lg font-medium">Latest Users</div>
            </div>

            <div class="mt-2 space-y-4">
                @foreach (\App\Models\User::latest()->take(5)->get() as $user)
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="text-sm">
                                {{ $user->name }}
                                <div class="text-xs text-gray-500">
                                    {{ $user->email }}
                                </div>
                            </div>
                        </div>
                        <div class="text-xs text-gray-500">
                            {{ $user->created_at->diffForHumans() }}
                        </div>
                    </div>
                @endforeach
            </div>
        </x-filament::card>
    </div>
</x-filament-panels::page>
