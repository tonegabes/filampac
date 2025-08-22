<?php

declare(strict_types=1);

namespace App\Settings;

use App\Enums\Permissions\SystemPermissions;
use BackedEnum;
use Spatie\LaravelSettings\Settings;

class SystemSettings extends Settings
{
    public bool $enable_registration = false;

    public string $app_name = 'MPAC';

    public static function group(): string
    {
        return 'system';
    }

    /**
     * Return the permission to access the settings page.
     */
    public static function getPermission(): BackedEnum
    {
        return SystemPermissions::SystemSettingsManage;
    }
}
