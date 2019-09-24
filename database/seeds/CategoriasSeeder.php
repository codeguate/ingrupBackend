<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert([
            'nombre'      => "Bebidas",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Bebidas.png",
            'descripcion'      => "Bebidas",
            'estado'           => 1,
            'padre'           => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('marcas')->insert([
            'nombre'      => "Alimentos",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Alimentos.png",
            'descripcion'      => "Alimentos",
            'estado'           => 1,
            'padre'           => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('marcas')->insert([
            'nombre'      => "Home Care ",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Home-care.png",
            'descripcion'      => "Home Care ",
            'estado'           => 1,
            'padre'           => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('marcas')->insert([
            'nombre'      => "Food Service ",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Food-service.png",
            'descripcion'      => "Food Service ",
            'estado'           => 1,
            'padre'           => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('marcas')->insert([
            'nombre'      => "Resinas Recicladas",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Resinas-recicladas.png",
            'descripcion'      => "Resinas Recicladas",
            'estado'           => 1,
            'padre'           => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('marcas')->insert([
            'nombre'      => "Soluciones de almacenamiento de Agua ",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Resinas-recicladas.png",
            'descripcion'      => "Soluciones de almacenamiento de Agua ",
            'estado'           => 1,
            'padre'           => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('marcas')->insert([
            'nombre'      => "Linea Agro -Industrial ",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Linea-Agro-Industrial.png",
            'descripcion'      => "Linea Agro -Industrial ",
            'estado'           => 1,
            'padre'           => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('marcas')->insert([
            'nombre'      => "Linea Vial",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Linea-Vial.png",
            'descripcion'      => "Linea Vial",
            'estado'           => 1,
            'padre'           => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('tiposproducto')->insert([
            'nombre'      => "Bebidas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Envases.png",
            'descripcion'      => "Bebidas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('tiposproducto')->insert([
            'nombre'      => 'Cajas Agricolas', 
            'foto'        => 'assets/images/Productos/Modulo-1/Iconos/Cajas-agricolas.png',
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('tiposproducto')->insert([
            'nombre'      => 'Cajillas', 
            'foto'        => 'assets/images/Productos/Modulo-1/Iconos/Cajillas.png',
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('tiposproducto')->insert([
            'nombre'      => 'Envases', 
            'foto'        => 'assets/images/Productos/Modulo-1/Iconos/Envases.png',
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('tiposproducto')->insert([
            'nombre'      => 'Empaque Flexible', 
            'foto'        => 'assets/images/Productos/Modulo-1/Iconos/Empaque-flexible-op2.png',
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('tiposproducto')->insert([
            'nombre'      => 'Empaque Flexible', 
            'foto'        => 'assets/images/Productos/Modulo-1/Iconos/Empaque-flexible.png',
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('tiposproducto')->insert([
            'nombre'      => 'Preformas', 
            'foto'        => 'assets/images/Productos/Modulo-1/Iconos/Preformas.png',
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('tiposproducto')->insert([
            'nombre'      => 'Tapas', 
            'foto'        => 'assets/images/Productos/Modulo-1/Iconos/Tapas.png',
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('tiposproducto')->insert([
            'nombre'      => 'Empaque Litografico', 
            'foto'        => 'assets/images/Productos/Modulo-1/Iconos/Empaque-litografico.png',
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);

        DB::table('categorias')->insert([
            'nombre'      => 'Envases Policarbonatados', 
            'descripcion'        => 'Envases Policarbonatados',
            'foto'        => null,
            'orden'       => 2,
            'estado'           => 1,
            'padre'       => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('categorias')->insert([
            'nombre'      => 'Envases PET', 
            'descripcion'        => 'Envases PET',
            'foto'        => null,
            'estado'           => 1,
            'padre'       => null,
            'orden'       => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
    }
}
