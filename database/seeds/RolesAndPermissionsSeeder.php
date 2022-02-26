<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Reset cached roles and permissions
         app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

         // create permissions
         Permission::create(['name' => 'editar']);
         Permission::create(['name' => 'eliminar']);
         Permission::create(['name' => 'crear']);
         
 
         // create roles and assign created permissions
 
         // this can be done as separate statements
         $role = Role::create(['name' => 'secretaria']);
         $role->givePermissionTo('crear');
 
         // or may be done by chaining
         $role = Role::create(['name' => 'medico'])
             ->givePermissionTo(['editar', 'eliminar','crear']);
 
         $role = Role::create(['name' => 'administrador']);
         $role->givePermissionTo(Permission::all());

         $user = User::find(1);
         $user->assignRole('administrador');   
         $user = User::find(2);
         $user->assignRole('secretaria');  
         $user = User::find(3);
         $user->assignRole('medico');  

    }
}
