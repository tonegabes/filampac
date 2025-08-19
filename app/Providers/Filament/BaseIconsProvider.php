<?php

namespace App\Providers\Filament;

use Filament\Support\Facades\FilamentIcon;
use Filament\Support\View\SupportIconAlias;
use Illuminate\Support\ServiceProvider;

final class BaseIconsProvider extends ServiceProvider
{
    public function register(): void
    {
        FilamentIcon::register([
            SupportIconAlias::BADGE_DELETE_BUTTON            => 'phosphor-trash',
            SupportIconAlias::BREADCRUMBS_SEPARATOR          => 'phosphor-arrow-right',
            SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL      => 'phosphor-arrow-left',
            SupportIconAlias::MODAL_CLOSE_BUTTON             => 'phosphor-x',
            SupportIconAlias::PAGINATION_FIRST_BUTTON        => 'phosphor-caret-line-left',
            SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL    => 'phosphor-caret-line-left',
            SupportIconAlias::PAGINATION_LAST_BUTTON         => 'phosphor-caret-line-right',
            SupportIconAlias::PAGINATION_LAST_BUTTON_RTL     => 'phosphor-caret-line-right',
            SupportIconAlias::PAGINATION_NEXT_BUTTON         => 'phosphor-caret-right',
            SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL     => 'phosphor-caret-left',
            SupportIconAlias::PAGINATION_PREVIOUS_BUTTON     => 'phosphor-caret-left',
            SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => 'phosphor-caret-right',
            SupportIconAlias::SECTION_COLLAPSE_BUTTON        => 'phosphor-caret-circle-down',
        ]);
    }
}
