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
            SupportIconAlias::BADGE_DELETE_BUTTON => 'badge.delete-button',
            SupportIconAlias::BREADCRUMBS_SEPARATOR => 'breadcrumbs.separator',
            SupportIconAlias::BREADCRUMBS_SEPARATOR_RTL => 'breadcrumbs.separator.rtl',
            SupportIconAlias::MODAL_CLOSE_BUTTON => 'modal.close-button',
            SupportIconAlias::PAGINATION_FIRST_BUTTON => 'pagination.first-button',
            SupportIconAlias::PAGINATION_FIRST_BUTTON_RTL => 'pagination.first-button.rtl',
            SupportIconAlias::PAGINATION_LAST_BUTTON => 'pagination.last-button',
            SupportIconAlias::PAGINATION_LAST_BUTTON_RTL => 'pagination.last-button.rtl',
            SupportIconAlias::PAGINATION_NEXT_BUTTON => 'pagination.next-button',
            SupportIconAlias::PAGINATION_NEXT_BUTTON_RTL => 'pagination.next-button.rtl',
            SupportIconAlias::PAGINATION_PREVIOUS_BUTTON => 'pagination.previous-button',
            SupportIconAlias::PAGINATION_PREVIOUS_BUTTON_RTL => 'pagination.previous-button.rtl',
            SupportIconAlias::SECTION_COLLAPSE_BUTTON => 'section.collapse-button',
        ]);
    }
}
