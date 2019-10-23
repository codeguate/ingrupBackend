<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Marcas;
use Response;
use Validator;

class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Marcas::whereRaw("padre IS NULL")->with('padre','submarca')->get(), 200);
    }

    public function getThisByFilter(Request $request, $id,$state)
    {
        if($request->get('filter')){
            switch ($request->get('filter')) {
                case 'marca':{
                    $objectSee = Marcas::whereRaw('padre=?',[$id])->with('padre','submarca')->get();
                    break;
                }
                case 'nombre':{
                    $objectSee = Marcas::whereRaw('nombre like %?%',[$id])->with('padre','submarca')->get();
                    break;
                }
                default:{
                    $objectSee = Marcas::whereRaw('user=? and state=?',[$id,$state])->with('padre','submarca')->get();
                    break;
                }
    
            }
        }else{
            $objectSee = Marcas::whereRaw('user=? and state=?',[$id,$state])->with('padre','submarca')->get();
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
                $newObject = new Marcas();
                $newObject->nombre            = $request->get('nombre');
                $newObject->foto            = $request->get('foto');
                $newObject->descripcion            = $request->get('descripcion');
                $newObject->estado            = $request->get('estado');
                $newObject->fotoDefault            = $request->get('fotoDefault');
                $newObject->padre            = $request->get('padre');
                $newObject->icono            = $request->get('icono');
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
        $objectSee = Marcas::whereRaw('id=?',[$id])->with('padre','submarca')->first();
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
        $objectUpdate = Marcas::find($id);
        if ($objectUpdate) {
            try {
                $objectUpdate->nombre = $request->get('nombre', $objectUpdate->nombre);
                $objectUpdate->foto = $request->get('foto', $objectUpdate->foto);
                $objectUpdate->descripcion = $request->get('descripcion', $objectUpdate->descripcion);
                $objectUpdate->estado = $request->get('estado', $objectUpdate->estado);
                $objectUpdate->padre = $request->get('padre', $objectUpdate->padre);
                $objectUpdate->icono = $request->get('icono', $objectUpdate->icono);
                $objectUpdate->fotoDefault = $request->get('fotoDefault', $objectUpdate->fotoDefault);
        
                $objectUpdate->save();
                $objectUpdate->submarca;
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
        $objectDelete = Marcas::find($id);
        if ($objectDelete) {
            try {
                Marcas::destroy($id);
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