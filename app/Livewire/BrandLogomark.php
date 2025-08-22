<?php

namespace App\Livewire;

use App\Settings\SystemSettings;
use Illuminate\View\View;
use Livewire\Component;

class BrandLogomark extends Component
{
    public string $appName;

    public string $appLogo;

    public function mount(): void
    {
        $this->appName = app(SystemSettings::class)->app_name;
        $this->appLogo = 'images/logo.png';
    }

    public function render(): View
    {
        return view('livewire.brand-logomark');
    }
}
