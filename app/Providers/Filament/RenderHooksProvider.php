<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Lists\FilamentIcons;
use Filament\Support\Facades\FilamentIcon;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

final class RenderHooksProvider extends ServiceProvider
{
    public function register(): void
    {
        // FilamentIcon::register(FilamentIcons::all());

        FilamentView::registerRenderHook(
            PanelsRenderHook::HEAD_END,
            fn (): View => view('hooks.head-end'),
        );
    }
}
