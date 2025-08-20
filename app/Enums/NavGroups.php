<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Icons\Phosphor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum NavGroups: string implements HasIcon, HasLabel
{
    case Authorization = 'Autorização';
    case Tools = 'Ferramentas';

    public function getLabel(): string
    {
        return $this->value;
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::Authorization => (string) Phosphor::ShieldCheck->value,
            self::Tools         => (string) Phosphor::Gear->value,
        };
    }
}
