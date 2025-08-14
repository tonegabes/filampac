<?php

declare(strict_types=1);

namespace App\Enums\Permissions;

enum RolePermissions: string
{
    case All = 'roles';
    case View = 'roles.view';
    case Create = 'roles.create';
    case Update = 'roles.update';
    case Delete = 'roles.delete';
    case Restore = 'roles.restore';
    case ForceDelete = 'roles.force-delete';
}
