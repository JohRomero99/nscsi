<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'admision']);
        $role3 = Role::create(['name' => 'recursosHumanos']);
        $role4 = Role::create(['name' => 'representante']);
        $role5 = Role::create(['name' => 'colector']);

        $permission = Permission::create(['name' => 'admin.home'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'admin.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.create'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.update'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'admin.destroy'])->syncRoles([$role1]);

        $permission = Permission::create(['name' => 'dashboard'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.agregar.estudiante.create'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.agregar.estudiante.store'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.eliminar.estudiante.destroy'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.ficha.estudiante.create'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.ficha.padre.create'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.ficha.estudiante.store'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.ficha.padre.store'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.ficha.madre.create'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.ficha.madre.store'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.ficha.medica.create'])->syncRoles([$role4]);
        $permission = Permission::create(['name' => 'dashboard.ficha.medica.store'])->syncRoles([$role4]);
     
    }
}
