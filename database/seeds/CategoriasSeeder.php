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
        DB::table('marcas')->insert(['nombre'=>'Bebidas Carbonatadas','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Bebidas/Carbonatadas.png','descripcion'=>'Bebidas Carbonatadas','estado'=>1,'padre'=> 1,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Bebidas No Carbonatadas','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Bebidas/No-carbonatadas.png','descripcion'=>'Bebidas No Carbonatadas','estado'=>1,'padre'=> 1,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Cerveza y Licores','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Bebidas/Cervezas-y-licores.png','descripcion'=>'Cerveza y Licores','estado'=>1,'padre'=> 1,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);

        DB::table('marcas')->insert(['nombre'=>'Aceites ','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Alimentos/Aceites.png','descripcion'=>'Aceites ','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Salsas  y Aderezos ','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Alimentos/Salsas-y-Aderezos.png','descripcion'=>'Salsas  y Aderezos ','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Lacteos y Embutidos ','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Alimentos/Lacteos-y-embutidos.png','descripcion'=>'Lacteos y Embutidos ','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Miel','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Alimentos/Miel.png','descripcion'=>'Miel','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Cereales y Harinas','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Alimentos/Cereales-y-Harinas.png','descripcion'=>'Cereales y Harinas','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Snacks','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Alimentos/Snacks.png','descripcion'=>'Snacks','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Café y Condimentos','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Alimentos/Cafe-y-condimentos.png','descripcion'=>'Café y Condimentos','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);

        DB::table('marcas')->insert(['nombre'=>'Home Care ','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Home-care.png','descripcion'=>'Home Care ','estado'=>1,'padre'=> 3,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
// ************************************************************************************************************************
        DB::table('tiposproducto')->insert([
            'nombre'      => "Preformas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Preformas.png",
            'descripcion'      => "Preformas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Envases",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Envases.png",
            'descripcion'      => "Envases",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Tapas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Tapas.png",
            'descripcion'      => "Tapas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Empaque flexible ",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Empaque flexible .png",
            'descripcion'      => "Empaque flexible ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Empaque  Litrográfico",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Empaque  Litrográfico.png",
            'descripcion'      => "Empaque  Litrográfico",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Cajilas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Cajilas.png",
            'descripcion'      => "Cajilas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Food Services",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Food Services.png",
            'descripcion'      => "Food Services",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Resinas Recicladas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Resinas Recicladas.png",
            'descripcion'      => "Resinas Recicladas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Depósitos",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Depositos.png",
            'descripcion'      => "Depósitos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Cisternas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Cisternas.png",
            'descripcion'      => "Cisternas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Fosas Sépticas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Fosas Sépticas.png",
            'descripcion'      => "Fosas Sépticas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Pilas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Pilas.png",
            'descripcion'      => "Pilas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Lavaderos",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Lavaderos.png",
            'descripcion'      => "Lavaderos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Cajas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Cajas.png",
            'descripcion'      => "Cajas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);

        
        DB::table('categorias')->insert([
            'nombre'      => "Preformas",
            'orden'      => 1,
            'foto'      => null,
            'descripcion'      => "Preformas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Envases",
            'orden'      => 2,
            'foto'      => null,
            'descripcion'      => "Envases",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Tapas",
            'orden'      => 3,
            'foto'      => null,
            'descripcion'      => "Tapas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Empaque flexible",
            'orden'      => 4,
            'foto'      => null,
            'descripcion'      => "Empaque flexible",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Empaque  Litrográfico",
            'orden'      => 5,
            'foto'      => null,
            'descripcion'      => "Empaque  Litrográfico",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cajillas",
            'orden'      => 6,
            'foto'      => null,
            'descripcion'      => "Cajillas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cajas Agrícolas",
            'orden'      => 7,
            'foto'      => null,
            'descripcion'      => "Cajas Agrícolas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Vasos",
            'orden'      => 8,
            'foto'      => null,
            'descripcion'      => "Vasos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cajillas Plegadizas",
            'orden'      => 9,
            'foto'      => null,
            'descripcion'      => "Cajillas Plegadizas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Resinas Recicladas",
            'orden'      => 10,
            'foto'      => null,
            'descripcion'      => "Resinas Recicladas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Depósitos de Agua",
            'orden'      => 11,
            'foto'      => null,
            'descripcion'      => "Depósitos de Agua",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cisternas",
            'orden'      => 12,
            'foto'      => null,
            'descripcion'      => "Cisternas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Fosas Sépticas ",
            'orden'      => 13,
            'foto'      => null,
            'descripcion'      => "Fosas Sépticas ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Pilas",
            'orden'      => 14,
            'foto'      => null,
            'descripcion'      => "Pilas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Lavaderos",
            'orden'      => 15,
            'foto'      => null,
            'descripcion'      => "Lavaderos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Contenedor Industrial ",
            'orden'      => 16,
            'foto'      => null,
            'descripcion'      => "Contenedor Industrial ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Hieleras",
            'orden'      => 17,
            'foto'      => null,
            'descripcion'      => "Hieleras",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Casillero Industrial / Comercial ",
            'orden'      => 18,
            'foto'      => null,
            'descripcion'      => "Casillero Industrial / Comercial ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Letrinas",
            'orden'      => 19,
            'foto'      => null,
            'descripcion'      => "Letrinas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Tarima",
            'orden'      => 20,
            'foto'      => null,
            'descripcion'      => "Tarima",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Envases PE Industrial ",
            'orden'      => 21,
            'foto'      => null,
            'descripcion'      => "Envases PE Industrial ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Multibox",
            'orden'      => 22,
            'foto'      => null,
            'descripcion'      => "Multibox",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cubetas",
            'orden'      => 23,
            'foto'      => null,
            'descripcion'      => "Cubetas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Canastos",
            'orden'      => 24,
            'foto'      => null,
            'descripcion'      => "Canastos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Linea Vial",
            'orden'      => 25,
            'foto'      => null,
            'descripcion'      => "Linea Vial",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        
    }
}
