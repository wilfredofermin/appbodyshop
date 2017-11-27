<?php

use App\Category;
use App\Gerenica;
use App\Service;
use App\SubCategory;
use Illuminate\Database\Seeder;

class SolicitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        Service::create([
            'estado' => 1,
            'name' => 'Tecnologia',
        ]);
        Service::create([
            'estado' => 1,
            'name' => 'Servicios generales',
        ]);

        //CATEGORY
        Category::create([
            'estado' => 1,
            'name' => 'Software',
            'service_id'=>'1'
        ]);
        Category::create([
            'estado' => 1,
            'name' => 'Infraestructura',
            'service_id'=>'1'
        ]);
        Category::create([
            'estado' => 1,
            'name' => 'Mantenimiento',
            'service_id'=>'3'
        ]);
        Category::create([
            'estado' => 1,
            'name' => 'Operaciones',
            'service_id'=>'3'
        ]);

        //SUCURSALES - TIPO 1
        Gerenica::create([
            'estado' => 1,
            'name' => 'Naco',
            'tipo' => '1',
        ]);
        //SUCURSALES - TIPO 1
        Gerenica::create([
            'estado' => 1,
            'name' => 'Bella Vista',
            'tipo' => '1',
        ]);
        //SUCURSALES - TIPO 1
        Gerenica::create([
            'estado' => 1,
            'name' => 'Arroyo Hondo',
            'tipo' => '1',
        ]);
        //SUCURSALES - TIPO 1
        Gerenica::create([
            'estado' => 1,
            'name' => 'Santiago',
            'tipo' => '1',
        ]);
        //PLAZAS  - TIPO 2
        Gerenica::create([
            'estado' => 1,
            'name' => 'Plaza Bodyshop',
            'tipo' => '2',
        ]);
        //PLAZAS  - TIPO 2
        Gerenica::create([
            'estado' => 1,
            'name' => 'Plaza Bella Piazza',
            'tipo' => '2',
        ]);
        //PLAZAS  - TIPO 2
        Gerenica::create([
            'estado' => 1,
            'name' => 'Plaza Spring Center',
            'tipo' => '2',
        ]);
        //DEPARTAMENTO  - TIPO 3
        Gerenica::create([
            'estado' => 1,
            'name' => 'Administracion',
            'tipo' => '3',
        ]);
        Gerenica::create([
            'estado' => 1,
            'name' => 'Contabilidad',
            'tipo' => '3',
        ]);
        Gerenica::create([
            'estado' => 1,
            'name' => 'Mantenimiento',
            'tipo' => '3',
        ]);

        Gerenica::create([
            'estado' => 1,
            'name' => 'Cargos Automaticos',
            'tipo' => '3',
        ]);
        Gerenica::create([
            'estado' => 1,
            'name' => 'Membresia',
            'tipo' => '3',
        ]);
        Gerenica::create([
            'estado' => 1,
            'name' => 'Mercadeo',
            'tipo' => '3',
        ]);
        Gerenica::create([
            'estado' => 1,
            'name' => 'Gestion Humana',
            'tipo' => '3',
        ]);

        //ADMINISTRATIVO
        SubCategory::create([
            'estado' => 1,
            'name' => 'CBS',
            'category_id' => '1',
        ]);
        SubCategory::create([
            'estado' => 1,
            'name' => 'Simetrica',
            'category_id' => '1',
        ]);
        SubCategory::create([
            'estado' => 1,
            'name' => 'ABC software',
            'category_id' => '1',
        ]);

        //INFRAESTRUCCTURA
        SubCategory::create([
            'estado' => 1,
            'name' => 'Redes ',
            'category_id' => '2',
        ]);
        SubCategory::create([
            'estado' => 1,
            'name' => 'Internet',
            'category_id' => '2',
        ]);
        SubCategory::create([
            'estado' => 1,
            'name' => 'Windows',
            'category_id' => '2',
        ]);
        SubCategory::create([
            'estado' => 1,
            'name' => 'Correo Electronico',
            'category_id' => '2',
        ]);
        SubCategory::create([
            'estado' => 1,
            'name' => 'Hardware',
            'category_id' => '2',
        ]);
        SubCategory::create([
            'estado' => 1,
            'name' => 'Telefonia',
            'category_id' => '2',
        ]);
        SubCategory::create([
            'estado' => 1,
            'name' => 'Control de acceso - Socios',
            'category_id' => '2',
        ]);
    }
}
