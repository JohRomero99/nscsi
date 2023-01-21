<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_1 = role::create(['name' => 'admin']);
        $role_2 = role::create(['name' => 'colector']);
        $role_3 = role::create(['name' => 'docente']);
        $role_4 = role::create(['name' => 'docente_tutor']);
        $role_5 = role::create(['name' => 'docente_revisor']);
        $role_6 = role::create(['name' => 'representante']);
        $role_7 = role::create(['name' => 'representante_invitado']);
        $role_8 = role::create(['name' => 'admisiones']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$role_1]);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role_1]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role_1]);
        Permission::create(['name' => 'admin.users.update '])->syncRoles([$role_1]);

        Permission::create(['name' => 'user.home'])->syncRoles([$role_1, $role_6]);

        Permission::create(['name' => 'representante.home'])->syncRoles([$role_6]);
        Permission::create(['name' => 'shopping.cart'])->syncRoles([$role_6]);
        Permission::create(['name' => 'shopping.resume'])->syncRoles([$role_6]);
        Permission::create(['name' => 'shopping.resumeUptade'])->syncRoles([$role_6]);
        Permission::create(['name' => 'shopping.pay'])->syncRoles([$role_6]);
        Permission::create(['name' => 'metodo.pago'])->syncRoles([$role_6]);
        Permission::create(['name' => 'paymentez.buy'])->syncRoles([$role_6]);
        Permission::create(['name' => 'paymentez.agregarTarjeta'])->syncRoles([$role_6]);
        Permission::create(['name' => 'paymentez.formaPago'])->syncRoles([$role_6]);
        Permission::create(['name' => 'paymentez.delete'])->syncRoles([$role_6]);
        Permission::create(['name' => 'paymentez.history'])->syncRoles([$role_6]);
        Permission::create(['name' => 'paymentez.refound'])->syncRoles([$role_6]);
        Permission::create(['name' => 'paymentez.otp'])->syncRoles([$role_6]);
        Permission::create(['name' => 'paymentez.verify'])->syncRoles([$role_1]);
        Permission::create(['name' => 'paymentez.facture'])->syncRoles([$role_6], [$role_1]);
        Permission::create(['name' => 'ambiente-produccion-vista'])->syncRoles([$role_1, $role_6]);
        Permission::create(['name' => 'ambiente-produccion-datos'])->syncRoles([$role_1, $role_6]);

        Permission::create(['name' => 'colector.home'])->syncRoles([$role_1, $role_2]);

        Permission::create(['name' => 'docente.home'])->syncRoles([$role_1, $role_3, $role_4, $role_5]);
        Permission::create(['name' => 'docente.vistaGenerarLibreta'])->syncRoles([$role_1, $role_4, $role_5]);
        Permission::create(['name' => 'docente.aprobar-libreta'])->syncRoles([$role_1, $role_5]);
        Permission::create(['name' => 'docente.anular-libreta'])->syncRoles([$role_1, $role_4, $role_5]);
        Permission::create(['name' => 'docente.reportes'])->syncRoles([$role_1, $role_3, $role_4, $role_5]);
   
    }
}