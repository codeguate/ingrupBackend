<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Productos;
use App\MainSliders;
use Response;
use Validator;
use Storage;
class MainSlidersController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return Response::json(MainSliders::all(), 200);
    }
    
    public function getThisByFilter(Request $request, $id,$state)
    {
        if($request->get('filter')){
            switch ($request->get('filter')) {
                case 'state':{
                    $objectSee = MainSliders::whereRaw('user=? and state=?',[$id,$state])->with('user')->get();
                    break;
                }
                case 'type':{
                    $objectSee = MainSliders::whereRaw('user=? and tipo=?',[$id,$state])->with('user')->get();
                    break;
                }
                default:{
                    $objectSee = MainSliders::whereRaw('user=? and state=?',[$id,$state])->with('user')->get();
                    break;
                }
    
            }
        }else{
            $objectSee = MainSliders::whereRaw('user=? and state=?',[$id,$state])->with('user')->get();
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
            'src'          => 'required',
            'marca'          => 'required',
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
                if($request->get('categoria')){
                    $objectUpdate2 = Productos::whereRaw('id=?',$request->get('marca'))->first();
                    $objectUpdate = Productos::whereRaw('categoria=? and marca=?',[$request->get('categoria'),$objectUpdate2->marca])->get();
                    if ($objectUpdate) {
                        try {
                            foreach ($objectUpdate as $key => $value) {
                                $newObject = new MainSliders();
                                $newObject->nombre            = $request->get('nombre');
                                $newObject->src            = $request->get('src');
                                $newObject->calibres            = $request->get('calibres');
                                $newObject->separador            = $request->get('separador');
                                $newObject->foto            = $request->get('foto');
                                $newObject->marca            = $value->id;
                                $newObject->save();
                            }
                            return Response::json($objectUpdate2, 200);

                           
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
                }else{
                    $newObject = new MainSliders();
                    $newObject->nombre            = $request->get('nombre');
                    $newObject->src            = $request->get('src');
                    $newObject->calibres            = $request->get('calibres');
                    $newObject->separador            = $request->get('separador');
                    $newObject->foto            = $request->get('foto');
                    $newObject->state            = $request->get('state');
                    $newObject->tipo            = $request->get('tipo');
                    $newObject->marca            = $request->get('marca');
                    $newObject->save();
                    return Response::json($newObject, 200);
                }
                
    
            } catch (Exception $e) {
                $returnData = array (
                    'status' => 500,
                    'message' => $e->getMessage()
                );
                return Response::json($returnData, 500);
            }
        }
    }
    
    public function uploadAvatar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'avatar'      => 'required|image|mimes:jpeg,png,jpg'
        ]);
    
        if ($validator->fails()) {
            $returnData = array(
                'status' => 400,
                'message' => 'Invalid Parameters',
                'validator' => $validator->messages()->toJson()
            );
            return Response::json($returnData, 400);
        }
        else {
            try {
    
                $path = Storage::disk('s3')->put($request->carpeta, $request->avatar);
    
                $objectUpdate = Storage::disk('s3')->url($path);
    
                return Response::json($objectUpdate, 200);
    
            }
            catch (Exception $e) {
                $returnData = array(
                    'status' => 500,
                    'message' => $e->getMessage()
                );
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
        $objectSee = MainSliders::find($id);
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
        $objectUpdate = MainSliders::find($id);
        if ($objectUpdate) {
            try {
                $objectUpdate->column = $request->get('get', $objectUpdate->column);
    
                $objectUpdate->save();
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
        $objectDelete = MainSliders::find($id);
        if ($objectDelete) {
            try {
                MainSliders::destroy($id);
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
