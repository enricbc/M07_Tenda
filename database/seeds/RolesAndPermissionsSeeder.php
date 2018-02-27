<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // Reseteja els rols i permisos emmagatzemats en caché
    app()['cache']->forget('spatie.permission.cache');

    // Crear permissos
    Permission::create(['name' => 'crear_productes']);
    Permission::create(['name' => 'editar_productes']);
    Permission::create(['name' => 'eliminar_productes']);
    Permission::create(['name' => 'editar_config']);
    Permission::create(['name' => 'comprar_productes']);
    Permission::create(['name' => 'llistar_usuaris']);

    // Crear rols i assignar-les permisos existents
    $role = Role::create(['name' => 'Admin']);
    $role->givePermissionTo('crear_productes', 'editar_productes', 'eliminar_productes', 'editar_productes', 'llistar_usuaris');

    $role = Role::create(['name' => 'treballador']);
    $role->givePermissionTo(['editar_productes', 'editar_config', 'llistar_usuaris']);

    $role = Role::create(['name' => 'Client']);
    $role->givePermissionTo(['editar_config', 'comprar_productes']);
}
