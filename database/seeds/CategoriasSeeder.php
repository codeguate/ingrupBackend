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
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Soluciones-de-almacenamiento-de-agua.png",
            'descripcion'      => "Soluciones de almacenamiento de Agua ",
            'estado'           => 1,
            'padre'           => null,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        DB::table('marcas')->insert([
            'nombre'      => "Linea Agro-Industrial ",
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
        DB::table('marcas')->insert(['nombre'=>'Bebidas Carbonatadas','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Bebidas/Carbonatadas.png','descripcion'=>'Bebidas Carbonatadas','estado'=>1,'padre'=> 1,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Bebidas No Carbonatadas','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Bebidas/No-carbonatadas.png','descripcion'=>'Bebidas No Carbonatadas','estado'=>1,'padre'=> 1,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Cerveza y Licores','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Bebidas/Cervezas-y-licores.png','descripcion'=>'Cerveza y Licores','estado'=>1,'padre'=> 1,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);

        DB::table('marcas')->insert(['nombre'=>'Aceites ','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Alimentos/Aceites.png','descripcion'=>'Aceites ','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Salsas  y Aderezos ','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Alimentos/Salsas-y-Aderezos.png','descripcion'=>'Salsas  y Aderezos ','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Lacteos y Embutidos ','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Alimentos/Lacteos-y-embutidos.png','descripcion'=>'Lacteos y Embutidos ','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Miel','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Alimentos/Miel.png','descripcion'=>'Miel','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Cereales y Harinas','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Alimentos/Cereales-y-Harinas.png','descripcion'=>'Cereales y Harinas','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Snacks','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Alimentos/Snacks.png','descripcion'=>'Snacks','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
        DB::table('marcas')->insert(['nombre'=>'Café y Condimentos','foto'=> 'assets/images/Mercados/Modulo-1/iconos/Alimentos/Cafe-y-condimentos.png','descripcion'=>'Café y Condimentos','estado'=>1,'padre'=> 2,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);

        DB::table('marcas')->insert(['nombre'=>'Home Care ','foto'=> 'assets/images/Mercados/Modulo-1/menu-principal/Home-care.png','descripcion'=>'Home Care ','estado'=>1,'padre'=> 3,'deleted_at'=>null,'created_at'=>date('Y-m-d H:m:s'),'updated_at'=>date('Y-m-d H:m:s')]);
// ************************************************************************************************************************

        
        DB::table('categorias')->insert([
            'nombre'      => "Preformas",
            'orden'      => 1,
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Preformas.png",
            'descripcion'      => "Preformas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Envases",
            'orden'      => 2,
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Envases.png",
            'descripcion'      => "Envases",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Tapas",
            'orden'      => 3,
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Tapas.png",
            'descripcion'      => "Tapas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Empaque flexible",
            'orden'      => 4,
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Empaque-flexible.png",
            'descripcion'      => "Empaque flexible",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Empaque  Litrográfico",
            'orden'      => 5,
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Empaque-litografico.png",
            'descripcion'      => "Empaque  Litrográfico",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cajillas",
            'orden'      => 6,
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Cajillas.png",
            'descripcion'      => "Cajillas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cajas Agrícolas",
            'orden'      => 7,
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Cajas-agricolas.png",
            'descripcion'      => "Cajas Agrícolas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Vasos",
            'orden'      => 8,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Food-service/Vasos.png",
            'descripcion'      => "Vasos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cajillas Plegadizas",
            'orden'      => 9,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Food-service/Cajillas-plegadizas.png",
            'descripcion'      => "Cajillas Plegadizas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Resinas Recicladas",
            'orden'      => 10,
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Resinas-recicladas.png",
            'descripcion'      => "Resinas Recicladas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Depósitos de Agua",
            'orden'      => 11,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Depositos-de-agua.png",
            'descripcion'      => "Depósitos de Agua",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cisternas",
            'orden'      => 12,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Cisternas.png",
            'descripcion'      => "Cisternas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Fosas Sépticas ",
            'orden'      => 13,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Fosas-septicas.png",
            'descripcion'      => "Fosas Sépticas ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Pilas",
            'orden'      => 14,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Pilas.png",
            'descripcion'      => "Pilas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Lavaderos",
            'orden'      => 15,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Lavaderos.png",
            'descripcion'      => "Lavaderos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Contenedor Industrial ",
            'orden'      => 16,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Contenedor-industrial.png",
            'descripcion'      => "Contenedor Industrial ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Hieleras",
            'orden'      => 17,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Hieleras.png",
            'descripcion'      => "Hieleras",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Casillero Industrial / Comercial ",
            'orden'      => 18,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Casilleros.png",
            'descripcion'      => "Casillero Industrial / Comercial ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Letrinas",
            'orden'      => 19,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Letrinas.png",
            'descripcion'      => "Letrinas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Tarima",
            'orden'      => 20,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Tarima.png",
            'descripcion'      => "Tarima",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Envases PE Industrial ",
            'orden'      => 21,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Envase-PE-industrial.png",
            'descripcion'      => "Envases PE Industrial ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Multibox",
            'orden'      => 22,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Multibox.png",
            'descripcion'      => "Multibox",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Cubetas",
            'orden'      => 23,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Cubetas.png",
            'descripcion'      => "Cubetas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Canastos",
            'orden'      => 24,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Canastas.png",
            'descripcion'      => "Canastos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Linea Vial",
            'orden'      => 25,
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Linea-Vial.png",
            'descripcion'      => "Linea Vial",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('categorias')->insert([
            'nombre'      => "Bio Cup",
            'orden'      => 26,
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Food-service/Vasos.png",
            'descripcion'      => "Bio Cup",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);

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
            'nombre'      => "Empaque flexible",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Empaque-flexible.png",
            'descripcion'      => "Empaque flexible",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Empaque  Litrográfico",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Empaque-litografico.png",
            'descripcion'      => "Empaque  Litrográfico",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Cajillas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Cajillas.png",
            'descripcion'      => "Cajillas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Cajas Agrícolas",
            'foto'      => "assets/images/Productos/Modulo-1/Iconos/Cajas-agricolas.png",
            'descripcion'      => "Cajas Agrícolas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Vasos",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Food-service/Vasos.png",
            'descripcion'      => "Vasos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Cajillas Plegadizas",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Food-service/Cajillas-plegadizas.png",
            'descripcion'      => "Cajillas Plegadizas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Resinas Recicladas",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Resinas-recicladas.png",
            'descripcion'      => "Resinas Recicladas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Depósitos de Agua",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Depositos-de-agua.png",
            'descripcion'      => "Depósitos de Agua",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Cisternas",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Cisternas.png",
            'descripcion'      => "Cisternas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Fosas Sépticas ",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Fosas-septicas.png",
            'descripcion'      => "Fosas Sépticas ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Pilas",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Pilas.png",
            'descripcion'      => "Pilas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Lavaderos",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Soluciones-de-almacenamiento-de-agua/Lavaderos.png",
            'descripcion'      => "Lavaderos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Contenedor Industrial ",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Contenedor-industrial.png",
            'descripcion'      => "Contenedor Industrial ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Hieleras",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Hieleras.png",
            'descripcion'      => "Hieleras",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Casillero Industrial / Comercial ",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Casilleros.png",
            'descripcion'      => "Casillero Industrial / Comercial ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Letrinas",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Letrinas.png",
            'descripcion'      => "Letrinas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Tarima",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Tarima.png",
            'descripcion'      => "Tarima",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Envases PE Industrial ",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Envase-PE-industrial.png",
            'descripcion'      => "Envases PE Industrial ",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Multibox",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Multibox.png",
            'descripcion'      => "Multibox",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Cubetas",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Cubetas.png",
            'descripcion'      => "Cubetas",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Canastos",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Linea-agro-industrial/Canastas.png",
            'descripcion'      => "Canastos",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Linea Vial",
            'foto'      => "assets/images/Mercados/Modulo-1/menu-principal/Linea-Vial.png",
            'descripcion'      => "Linea Vial",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        DB::table('tiposproducto')->insert([
            'nombre'      => "Bio Cup",
            'foto'      => "assets/images/Mercados/Modulo-1/iconos/Food-service/Vasos.png",
            'descripcion'      => "Bio Cup",
            'estado'           => 1,
            'deleted_at'       => null,
            'created_at'       => date('Y-m-d H:m:s'),
            'updated_at'       => date('Y-m-d H:m:s')
        ]);
        
        
    }
}
