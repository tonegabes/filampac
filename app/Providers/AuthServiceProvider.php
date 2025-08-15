<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

final class AuthServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->configureGates();
    }

    private function configureGates(): void
    {
        Gate::before(fn (User $user) => $user->hasRole('TheOneAboveAll') ? true : null);
    }
}
