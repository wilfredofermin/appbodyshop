<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'estado'=>1,
            'name'=>'Jacqueline Aponte',
            'email' => 'j.aponte@clubbodyshop.com',
            'role'=>2,
            'sucursal'=>'Naco',
            'departament'=>'Gestion Humnana',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'estado'=>1,
            'name'=>'Wilfredo Fermin',
            'email' => 'w.fermin@clubbodyshop.com',
            'role'=>1,
            'sucursal'=>'Naco',
            'departament'=>'Computos',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'estado'=>1,
            'name'=>'Newton Burgos',
            'email' => 'n.burgos@clubbodyshop.com',
            'role'=>1,
            'sucursal'=>'Naco',
            'departament'=>'Computos',
            'password' => bcrypt('12345'),
        ]);
    }
}
