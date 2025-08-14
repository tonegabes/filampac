<?php

namespace Database\Seeders;

use App\Enums\Permissions\SystemPermissions;
use App\Enums\Permissions\UserPermissions;
use App\Enums\Roles;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\PermissionRegistrar;

class AuthorizationSeeder extends Seeder
{
    public function run(): void
    {
        // reset cached roles and permissions
        app()->make(PermissionRegistrar::class)->forgetCachedPermissions();

        // Roles ------------------------------------------------------------------------------

        $roleDeveloper = Role::firstOrCreate(['name' => Roles::Developer->value]);
        $roleAdmin = Role::firstOrCreate(['name' => Roles::Admin->value]);
        // $roleOperator = Role::firstOrCreate(['name' => Roles::Operator->value]);

        // Permissions ------------------------------------------------------------------------

        $permissionsBag = [];

        foreach (SystemPermissions::cases() as $permission) {
            $permissionsBag[] = Permission::firstOrCreate(['name' => $permission->value]);
        }

        foreach (UserPermissions::cases() as $permission) {
            $permissionsBag[] = Permission::firstOrCreate(['name' => $permission->value]);
        }

        $permissionsBag = collect($permissionsBag);

        // Assign Permissions to Roles --------------------------------------------------------

        $roleDeveloper->syncPermissions($permissionsBag);

        $roleAdmin->syncPermissions([
            SystemPermissions::PanelsViewAdmin->value,
            ...UserPermissions::cases(),
        ]);

        // Create default users and assing roles ---------------------------------------------

        // Developer
        $userDeveloper = User::firstOrCreate(
            [
                'username' => 'developer',
                'email'    => 'developer@email.com',
            ],
            [
                'name'      => 'Desenvolvedor',
                'password'  => Hash::make('developer'),
                'is_active' => true,
            ]
        );
        $userDeveloper->syncRoles([$roleDeveloper, $roleAdmin]);

        // Admin
        $userAdmin = User::firstOrCreate(
            [
                'username' => 'admin',
                'email'    => 'admin@email.com',
            ],
            [
                'name'      => 'Administrador',
                'password'  => Hash::make('admin'),
                'is_active' => true,
            ]
        );
        $userAdmin->syncRoles([$roleAdmin]);

        // Operator
        // $userOperator = User::firstOrCreate(
        //     [
        //         'username' => 'operator',
        //         'email'    => 'operator@email.com',
        //     ],
        //     [
        //         'name'      => 'Operador',
        //         'password'  => Hash::make('operator'),
        //         'is_active' => true,
        //     ],
        // );
        // $userOperator->syncRoles([$roleOperator]);

    }
}
