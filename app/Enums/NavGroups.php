<?php

declare(strict_types=1);

namespace App\Enums;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum NavGroups: string implements HasIcon, HasLabel
{
    case Authorization = 'Autorização';

    public function getLabel(): string
    {
        return $this->value;
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Authorization => 'heroicon-o-shield-check',
        };
    }
}
