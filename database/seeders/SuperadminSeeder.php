<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//agregamos lo siguiente
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\permission;
use Spatie\Permission\Models\Role;


class SuperadminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usuario=user::create([

            'name'=>'superadmin',
            'email'=>'super@admin.com',
            'password'=>bcrypt('12345678'),

        ]);

        $rol=role::create([ 'name'=>'superadmin']);
        $permisos=permission::pluck('id', 'id')->all();
        $rol->syncpermissions($permisos);
        $usuario->assignrole([$rol->id]);
    }
}
