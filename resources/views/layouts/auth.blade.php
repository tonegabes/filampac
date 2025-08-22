@use('App\Settings\SystemSettings')


<x-filament-panels::layout.base>

    <div class="fi-simple-layout">

        <div class="fi-simple-main-ctn flex-col">

            <h1>{{ app(SystemSettings::class)->app_name; }}</h1>

            <main class="fi-simple-main">
                {{ $slot }}
            </main>

            <div class="text-sm text-zinc-400">
                © {{ date('Y') }} - Ministério Público do Estado do Acre -
                {{ config('app.version') }}
            </div>

        </div>
    </div>
</x-filament-panels::layout.base>
