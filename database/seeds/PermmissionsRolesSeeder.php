<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermmissionsRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'edit question']);
        Permission::create(['name' => 'delete question']);
        Permission::create(['name' => 'create question']);

        Permission::create(['name' => 'edit comment']);
        Permission::create(['name' => 'delete comment']);
        Permission::create(['name' => 'create comment']);


        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'regular']);
        $role->givePermissionTo(['create question' , 'create comment']);
        // He will be able to edit his own comment and question using laravel polict
    }
}
