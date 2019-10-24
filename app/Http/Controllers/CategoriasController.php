<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categorias;
use App\Marcas;
use Response;
use Validator;
class CategoriasController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return Response::json(Categorias::with('padre','subcategorias')->get(), 200);
    }
    
    public function getThisByFilter(Request $request, $id,$state)
    {
        if($request->get('filter')){
            switch ($request->get('filter')) {
                case 'categoria':{
                    $objectSee = Categorias::whereRaw('padre=?',[$id])->with('padre','subcategorias','productos')->get();
                    break;
                }
                case 'nombre':{
                    $objectSee = Categorias::whereRaw('LOWER(nombre) like LOWER("%'.$id.'%")',[])->with('padre','subcategorias','productos')->get();
                    $objectSee2 = Marcas::whereRaw('LOWER(nombre) like LOWER("%'.$id.'%")',[])->with('padre','submarca','productos')->get();
                    foreach ($objectSee as $key => $value) {
                        $value->pagina = "productos";
                    }
                    foreach ($objectSee2 as $key => $value) {
                        $value->pagina = "mercados";
                        $objectSee->push($value);
                    }
                    break;
                }
                default:{
                    $objectSee = Categorias::whereRaw('user=? and state=?',[$id,$state])->with('padre','subcategorias','productos')->get();
                    break;
                }
    
            }
        }else{
            $objectSee = Categorias::whereRaw('user=? and state=?',[$id,$state])->with('padre','subcategorias','productos')->get();
        }
    
        if ($objectSee) {
            return Response::json($objectSee, 200);
    
        }
        else {
            $returnData = array (
                'status' => 404,
                'message' => 'No record found'
            );
            return Response::json($returnData, 404);
        }
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre'          => 'required',
        ]);
        if ( $validator->fails() ) {
            $returnData = array (
                'status' => 400,
                'message' => 'Invalid Parameters',
                'validator' => $validator
            );
            return Response::json($returnData, 400);
        }
        else {
            try {
                $newObject = new Categorias();
                $newObject->nombre            = $request->get('nombre');
                $newObject->foto            = $request->get('foto');
                $newObject->descripcion            = $request->get('descripcion');
                $newObject->orden            = $request->get('orden');
                $newObject->estado            = $request->get('estado');
                $newObject->padre            = $request->get('padre');
                $newObject->save();
                return Response::json($newObject, 200);
    
            } catch (Exception $e) {
                $returnData = array (
                    'status' => 500,
                    'message' => $e->getMessage()
                );
                return Response::json($returnData, 500);
            }
        }
    }
    
    
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $objectSee = Categorias::find($id);
        if ($objectSee) {
            $objectSee->padre;
            return Response::json($objectSee, 200);
    
        }
        else {
            $returnData = array (
                'status' => 404,
                'message' => 'No record found'
            );
            return Response::json($returnData, 404);
        }
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        //
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $objectUpdate = Categorias::find($id);
        if ($objectUpdate) {
            try {
                $objectUpdate->foto = $request->get('foto', $objectUpdate->foto);
                $objectUpdate->descripcion = $request->get('descripcion', $objectUpdate->descripcion);
                $objectUpdate->orden = $request->get('orden', $objectUpdate->orden);
                $objectUpdate->estado = $request->get('estado', $objectUpdate->estado);
                $objectUpdate->padre = $request->get('padre', $objectUpdate->padre);
                $objectUpdate->nombre = $request->get('nombre', $objectUpdate->nombre);
    
                $objectUpdate->save();
                $objectUpdate->padre;
                return Response::json($objectUpdate, 200);
            } catch (Exception $e) {
                $returnData = array (
                    'status' => 500,
                    'message' => $e->getMessage()
                );
                return Response::json($returnData, 500);
            }
        }
        else {
            $returnData = array (
                'status' => 404,
                'message' => 'No record found'
            );
            return Response::json($returnData, 404);
        }
    }
    
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $objectDelete = Categorias::find($id);
        if ($objectDelete) {
            try {
                Categorias::destroy($id);
                return Response::json($objectDelete, 200);
            } catch (Exception $e) {
                $returnData = array (
                    'status' => 500,
                    'message' => $e->getMessage()
                );
                return Response::json($returnData, 500);
            }
        }
        else {
            $returnData = array (
                'status' => 404,
                'message' => 'No record found'
            );
            return Response::json($returnData, 404);
        }
    }
}
