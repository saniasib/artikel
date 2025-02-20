<?php

namespace Database\Seeders;

use App\Models\KategoriKabardesa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Permissions
        Permission::create(['name' => 'view role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        Permission::create(['name' => 'view permission']);
        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);

        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        // Create Roles
        $superAdminRole = Role::create(['name' => 'super-admin']); //as super-admin
        $userRole = Role::create(['name' => 'user']);

        // Lets give all permission to super-admin role.
        $allPermissionNames = Permission::pluck('name')->toArray();

        $superAdminRole->givePermissionTo($allPermissionNames);
        $userRole->givePermissionTo($allPermissionNames);

        // Let's Create User and assign Role to it.

        $superAdminUser = User::firstOrCreate([
                    'email' => 'superadmin@gmail.com',
                ], [
                    'name' => 'Super Admin',
                    'email' => 'superadmin@gmail.com',
                    'password' => Hash::make ('12345678'),
                    'role' => 'super-admin',
                    'gender' => 'PEREMPUAN',
                    'birth_date' => '1995-05-15',
                ]);

        $superAdminUser->assignRole($superAdminRole);

        $PenggunaUser = User::firstOrCreate([
            'email' => 'admintest@gmail.com',
        ], [
            'name' => 'Super Admin',
            'email' => 'admintest@gmail.com',
            'password' => Hash::make ('12345678'),
            'role' => 'super-admin',
            'gender' => 'PEREMPUAN',
            'birth_date' => '1995-05-15',
        ]);

        $PenggunaUser->assignRole($superAdminRole);
        
    }
}