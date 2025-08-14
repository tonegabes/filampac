<?php

declare(strict_types=1);

namespace App\Enums\Permissions;

enum SystemPermissions: string
{
    case PanelsViewAll = 'system.panels.view';
    case PanelsViewAdmin = 'system.panels.view.admin';
}
