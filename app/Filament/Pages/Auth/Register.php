<?php

namespace App\Filament\Pages\Auth;

use App\Enums\Roles;
use Filament\Auth\Pages\Register as VendorRegister;
use Illuminate\Database\Eloquent\Model;

class Register extends VendorRegister
{
    protected static string $layout = 'layouts.auth';

    protected string $view = 'filament.pages.auth.register';

    /**
     * @param  array<string, mixed>  $data
     */
    protected function handleRegistration(array $data): Model
    {
        $user = $this->getUserModel()::create($data);
        $user->assignRole(Roles::Guest);

        return $user;
    }
}
