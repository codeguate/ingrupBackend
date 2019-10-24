<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Productos;
use App\Marcas;
use App\Categorias;
use App\Inventario;
use Response;
use Validator;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Productos::with('tipos','categorias','marcas','presentaciones','imagenes','slides')->get(), 200);
    }

    public function getThisByFilter(Request $request, $id,$state)
    {
        if($request->get('filter')){
            switch ($request->get('filter')) {
                case 'tipo':{
                    $objectSee = Productos::select('categoria')->whereRaw('marca=?',[$id])->groupby('categoria')->orderby('categoria')->get();
                    $objectSee = Categorias::whereIn("id",$objectSee)->with('productos')->get();

                    foreach ($objectSee as $key => $value) {
                        $objectSee2 = Productos::whereRaw('marca=? and categoria=?',[$id,$value->id])->get();
                        unset($value->productos);
                        $value->productos = $objectSee2;
                    }
                    break;
                }
                case 'nombre':{
                    $objectSee = Productos::whereRaw('nombre=?',[$id])->with('tipos','categorias','marcas','presentaciones','imagenes','slides')->get();
                    break;
                }
                case 'nombres':{
                    $objectSee = Productos::whereRaw('LOWER(nombre) like LOWER("%'.$id.'%")',[])->with('tipos','categorias','marcas','presentaciones','imagenes','slides')->get();
                    break;
                }
                case 'marca':{
                    $objectSee = Productos::select('marca')->whereRaw('categoria=?',[$id])->groupby('marca')->orderby('marca')->get();
                    $objectSee = Marcas::whereIn("id",$objectSee)->with('productos')->get();

                    foreach ($objectSee as $key => $value) {
                        $objectSee2 = Productos::whereRaw('marca=? and categoria=?',[$value->id,$id])->get();
                        unset($value->productos);
                        $value->productos = $objectSee2;
                    }
                    break;
                }
                case 'categoria_tipo':{
                    $objectSee = Productos::whereRaw('categoria=? && tipo=?',[$id,$state])->with('tipos','categorias','marcas','presentaciones','imagenes','slides')->get();
                    break;
                }
                case 'categoria_marca':{
                    $objectSee = Productos::whereRaw('categoria=? && marca=?',[$id,$state])->with('tipos','categorias','marcas','presentaciones','imagenes','slides')->get();
                    break;
                }
                case 'categoria':{
                    $objectSee = Productos::whereRaw('categoria=?',[$id])->with('tipos','categorias','marcas','presentaciones','imagenes','slides')->get();
                    break;
                }
                default:{
                    $objectSee = Productos::whereRaw('user=? and state=?',[$id,$state])->with('tipos','categorias','marcas','presentaciones','imagenes','slides')->get();
                    break;
                }
    
            }
        }else{
            $objectSee = Productos::whereRaw('user=? and state=?',[$id,$state])->with('tipos','categorias','marcas','presentaciones','imagenes','slides')->get();
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

    public function existencia()
    {
        return Response::json(Inventario::where('cantidad','>','0')->with('productos')->get(), 200);
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
            'tipo'            => 'required'
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
                    $newObject = new Productos();
                    $newObject->descripcion       = $request->get('descripcion');
                    $newObject->nombre            = $request->get('nombre');
                    $newObject->codigo            = $request->get('codigo');
                    $newObject->marca          = $request->get('marca');
                    $newObject->categoria          = $request->get('categoria');
                    $newObject->marcaDes          = $request->get('marcaDes');
                    $newObject->hasModel              = $request->get('hasModel');
                    $newObject->fov              = $request->get('fov');
                    $newObject->near              = $request->get('near');
                    $newObject->far              = $request->get('far');
                    $newObject->pX              = $request->get('pX');
                    $newObject->pY              = $request->get('pY');
                    $newObject->pZ              = $request->get('pZ');
                    $newObject->model              = $request->get('model');
                    $newObject->foto              = $request->get('foto');
                    $newObject->tX              = $request->get('tX');
                    $newObject->tY              = $request->get('tY');
                    $newObject->tZ              = $request->get('tZ');
                    $newObject->rX              = $request->get('rX');
                    $newObject->rY              = $request->get('rY');
                    $newObject->rZ              = $request->get('rZ');
                    $newObject->tipo              = $request->get('tipo');
                    $newObject->save();
                    $newObject1 = new Inventario();
                    $newObject1->precioCosto       = $request->get('precioCosto',0);
                    $newObject1->precioVenta       = $request->get('precioVenta',0);
                    $newObject1->precioClienteEs   = $request->get('precioClienteEs',0);
                    $newObject1->precioDistribuidor= $request->get('precioDistribuidor',0);
                    $newObject1->cantidad          = $request->get('cantidad',0);
                    $newObject1->minimo            = $request->get('minimo',0);
                    $newObject1->descuento         = $request->get('descuento',0);
                    $newObject1->producto          = $newObject->id;
                    $newObject1->save();
                    $newObject->inventario;
                    return Response::json($newObject, 200);
                
                } catch (\Illuminate\Database\QueryException $e) {
                    if($e->errorInfo[0] == '01000'){
                        $errorMessage = "Error Constraint";
                    }  else {
                        $errorMessage = $e->getMessage();
                    }
                    $returnData = array (
                        'status' => 505,
                        'SQLState' => $e->errorInfo[0],
                        'message' => $errorMessage
                    );
                    return Response::json($returnData, 500);
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
        $objectSee = Productos::find($id);
        if ($objectSee) {
            $objectSee->imagenes;
            $objectSee->presentaciones;
            $objectSee->slides;
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
        $objectUpdate = Productos::find($id);
        if ($objectUpdate) {
                try {
                    $objectUpdate->descripcion       = $request->get('descripcion', $objectUpdate->descripcion);
                    $objectUpdate->nombre            = $request->get('nombre', $objectUpdate->nombre);
                    $objectUpdate->codigo            = $request->get('codigo', $objectUpdate->codigo);
                    $objectUpdate->marcaDes          = $request->get('marcaDes', $objectUpdate->marcaDes);
                    $objectUpdate->tipo              = $request->get('tipo', $objectUpdate->tipo);
                    $objectUpdate->estado            = $request->get('estado', $objectUpdate->estado);
                    $objectUpdate->hasModel             = $request->get('hasModel', $objectUpdate->hasModel);
                    $objectUpdate->fov             = $request->get('fov', $objectUpdate->fov);
                    $objectUpdate->near             = $request->get('near', $objectUpdate->near);
                    $objectUpdate->far             = $request->get('far', $objectUpdate->far);
                    $objectUpdate->pX             = $request->get('pX', $objectUpdate->pX);
                    $objectUpdate->pY             = $request->get('pY', $objectUpdate->pY);
                    $objectUpdate->pZ             = $request->get('pZ', $objectUpdate->pZ);
                    $objectUpdate->model             = $request->get('model', $objectUpdate->model);
                    $objectUpdate->foto             = $request->get('foto', $objectUpdate->foto);
                    $objectUpdate->tX             = $request->get('tX', $objectUpdate->tX);
                    $objectUpdate->tY             = $request->get('tY', $objectUpdate->tY);
                    $objectUpdate->tZ             = $request->get('tZ', $objectUpdate->tZ);
                    $objectUpdate->rX             = $request->get('rX', $objectUpdate->rX);
                    $objectUpdate->rY             = $request->get('rY', $objectUpdate->rY);
                    $objectUpdate->rZ             = $request->get('rZ', $objectUpdate->rZ);
                    $objectUpdate->marca             = $request->get('marca', $objectUpdate->marca);
                    
                    $objectUpdate->save();
                    return Response::json($objectUpdate, 200);
                } catch (\Illuminate\Database\QueryException $e) {
                    if($e->errorInfo[0] == '01000'){
                        $errorMessage = "Error Constraint";
                    }  else {
                        $errorMessage = $e->getMessage();
                    }
                    $returnData = array (
                        'status' => 505,
                        'SQLState' => $e->errorInfo[0],
                        'message' => $errorMessage
                    );
                    return Response::json($returnData, 500);
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
        $objectDelete = Productos::find($id);
        if ($objectDelete) {
            try {
                Productos::destroy($id);
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