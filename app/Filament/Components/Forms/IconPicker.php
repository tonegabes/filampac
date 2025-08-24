<?php

declare(strict_types=1);

namespace App\Filament\Components\Forms;

use Filament\Forms\Components\Concerns\HasExtraInputAttributes;
use Filament\Forms\Components\Concerns\HasOptions;
use Filament\Forms\Components\Field;
use ToneGabes\Filament\Icons\Enums\Phosphor;

class IconPicker extends Field
{
    use HasExtraInputAttributes;
    use HasOptions;

    protected string $view = 'filament.components.forms.icon-picker';

    public string $icon = '';

    /**
     * @return Phosphor[]
     */
    public function getIcons(): array
    {
        return Phosphor::cases();
    }
}
