<?php

use Illuminate\Database\Seeder;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagenes_productos')->insert(['nombre'=> "",'src'=> "assets/fotos/INGRUP-1078.jpg",'foto'=> "assets/fotos/INGRUP-1078.jpg",'separador'=> null,'calibres'=> null,'producto'=> 1,'created_at'=> date('Y-m-d H:m:s'),'updated_at'=> date('Y-m-d H:m:s')]);
        
    }
}
