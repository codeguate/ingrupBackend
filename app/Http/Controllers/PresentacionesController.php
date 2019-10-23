<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Presentaciones;
use Response;
use Validator;
class PresentacionesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return Response::json(Presentaciones::all(), 200);
        // $objectUpdate = Presentaciones::with('productos')->get();
        // if ($objectUpdate) {
        //     try {
        //         foreach ($objectUpdate as $key => $value) {
        //             $value->nombre = $value->productos->nombre;
        //             $value->descripcion = $value->productos->nombre;
        //             $value->save();
        //         }
        
        //         return Response::json($objectUpdate, 200);
        //     } catch (Exception $e) {
        //         $returnData = array (
        //             'status' => 500,
        //             'message' => $e->getMessage()
        //         );
        //         return Response::json($returnData, 500);
        //     }
        // }
        // else {
        //     $returnData = array (
        //         'status' => 404,
        //         'message' => 'No record found'
        //     );
        //     return Response::json($returnData, 404);
        // }
    }
    
    public function getThisByFilter(Request $request, $id,$state)
    {
        if($request->get('filter')){
            switch ($request->get('filter')) {
                case 'producto':{
                    $objectSee = Presentaciones::whereRaw('producto=?',[$id])->with('productos')->get();
                    break;
                }
                case 'cuello':{
                    $objectSee = Presentaciones::whereRaw('cuello=?',[$id])->with('productos')->get();
                    break;
                }
                case 'unidades':{
                    $objectSee = Presentaciones::whereRaw('unidades=?',[$id])->with('productos')->get();
                    break;
                }
                case 'material':{
                    $objectSee = Presentaciones::whereRaw('material=?',[$id])->with('productos')->get();
                    break;
                }
                case 'prod-nombre':{
                    $objectSee = Presentaciones::whereRaw('producto=? && nombre=?',[$id,$state])->with('productos')->get();
                    break;
                }
                case 'prod-separador':{
                    $objectSee = Presentaciones::whereRaw('producto=? && separador=?',[$id,$state])->with('productos')->get();
                    break;
                }
                case 'prod-material':{
                    $objectSee = Presentaciones::whereRaw('producto=? && material=?',[$id,$state])->with('productos')->get();
                    break;
                }
                case 'prod-peso':{
                    $objectSee = Presentaciones::whereRaw('producto=? && peso=?',[$id,$state])->with('productos')->get();
                    break;
                }
                case 'prod-cuello':{
                    $objectSee = Presentaciones::whereRaw('producto=? && cuello=?',[$id,$state])->with('productos')->get();
                    break;
                }
                case 'prod-altura':{
                    $objectSee = Presentaciones::whereRaw('producto=? && altura=?',[$id,$state])->with('productos')->get();
                    break;
                }
                case 'prod-largo':{
                    $objectSee = Presentaciones::whereRaw('producto=? && largo=?',[$id,$state])->with('productos')->get();
                    break;
                }
                case 'prod-unidades':{
                    $objectSee = Presentaciones::whereRaw('producto=? && unidades=?',[$id,$state])->with('productos')->get();
                    break;
                }
                default:{
                    $objectSee = Presentaciones::with('productos')->get();
                    break;
                }
    
            }
        }else{
            $objectSee = Presentaciones::with('productos')->get();
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
            'producto'          => 'required',
            'cuello'          => 'required',
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
                $newObject = new Presentaciones();
                $newObject->nombre            = $request->get('nombre');
                $newObject->descripcion            = $request->get('descripcion');
                $newObject->calibres            = $request->get('calibres');
                $newObject->separador            = $request->get('separador');
                $newObject->foto1            = $request->get('foto1');
                $newObject->material            = $request->get('material');
                $newObject->peso            = $request->get('peso');
                $newObject->liner            = $request->get('liner');
                $newObject->hotfill            = $request->get('hotfill');
                $newObject->cuello            = $request->get('cuello');
                $newObject->altura            = $request->get('altura');
                $newObject->largo            = $request->get('largo');
                $newObject->unidades            = $request->get('unidades');
                $newObject->producto            = $request->get('producto');
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
        $objectSee = Presentaciones::find($id);
        if ($objectSee) {
            $objectSee->productos;
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
        $objectUpdate = Presentaciones::find($id);
        if ($objectUpdate) {
            try {
                $objectUpdate->nombre = $request->get('nombre', $objectUpdate->nombre);
                $objectUpdate->descripcion = $request->get('descripcion', $objectUpdate->descripcion);
                $objectUpdate->calibres = $request->get('calibres', $objectUpdate->calibres);
                $objectUpdate->separador = $request->get('separador', $objectUpdate->separador);
                $objectUpdate->foto1 = $request->get('foto1', $objectUpdate->foto1);
                $objectUpdate->material = $request->get('material', $objectUpdate->material);
                $objectUpdate->peso = $request->get('peso', $objectUpdate->peso);
                $objectUpdate->cuello = $request->get('cuello', $objectUpdate->cuello);
                $objectUpdate->altura = $request->get('altura', $objectUpdate->altura);
                $objectUpdate->largo = $request->get('largo', $objectUpdate->largo);
                $objectUpdate->liner = $request->get('liner', $objectUpdate->liner);
                $objectUpdate->hotfill = $request->get('hotfill', $objectUpdate->hotfill);
                $objectUpdate->unidades = $request->get('unidades', $objectUpdate->unidades);
                $objectUpdate->producto = $request->get('producto', $objectUpdate->producto);
    
                $objectUpdate->save();
                $objectUpdate->productos;
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
        $objectDelete = Presentaciones::find($id);
        if ($objectDelete) {
            try {
                Presentaciones::destroy($id);
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
