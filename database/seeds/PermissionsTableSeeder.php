<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',      
        ]);

        //Roles
        Permission::create([
            'name'          => 'Navegar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de roles',
            'slug'          => 'roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de roles',
            'slug'          => 'roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',      
        ]);

        //Brands
        Permission::create([
            'name'          => 'Navegar marcas',
            'slug'          => 'brands.index',
            'description'   => 'Lista y navega todos las marcas del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de una marca',
            'slug'          => 'brands.show',
            'description'   => 'Ve en detalle cada marca del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de marcas',
            'slug'          => 'brands.create',
            'description'   => 'Podría crear nuevas marcas en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de marcas',
            'slug'          => 'brands.edit',
            'description'   => 'Podría editar cualquier dato de una marca del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar marcas',
            'slug'          => 'brands.destroy',
            'description'   => 'Podría eliminar cualquier marca del sistema',      
        ]);
        
        //Coupons
        Permission::create([
            'name'          => 'Navegar cupones',
            'slug'          => 'coupons.index',
            'description'   => 'Lista y navega todos los coupones del sistema',
        ]);

        Permission::create([
            'name'          => 'Ver detalle de un cupon',
            'slug'          => 'coupons.show',
            'description'   => 'Ve en detalle cada cupon del sistema',            
        ]);
        
        Permission::create([
            'name'          => 'Creación de cupones',
            'slug'          => 'coupons.create',
            'description'   => 'Podría crear nuevos cupones en el sistema',
        ]);
        
        Permission::create([
            'name'          => 'Edición de cupones',
            'slug'          => 'coupons.edit',
            'description'   => 'Podría editar cualquier dato de un cupon del sistema',
        ]);
        
        Permission::create([
            'name'          => 'Eliminar cupones',
            'slug'          => 'coupons.destroy',
            'description'   => 'Podría eliminar cualquier cupon del sistema',      
        ]);

    }
}
