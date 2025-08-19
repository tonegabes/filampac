<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

final class RenderHooksProvider extends ServiceProvider
{
    public function register(): void
    {
        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn (): View => view('hooks.head-end'),
        );
    }
}
