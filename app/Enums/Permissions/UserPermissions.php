<?php

declare(strict_types=1);

namespace App\Enums\Permissions;

enum UserPermissions: string
{
    case View = 'users.view';
    case Create = 'users.create';
    case Update = 'users.update';
    case Delete = 'users.delete';
    case Restore = 'users.restore';
    case ForceDelete = 'users.force-delete';
}
