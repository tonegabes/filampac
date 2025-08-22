<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('system.app_name', 'MPAC');
        $this->migrator->add('system.enable_registration', true);
    }
};
