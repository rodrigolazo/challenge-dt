<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vuelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vuelo = Vuelo::all();
        return $vuelo;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'ciudadOrigen' => 'required',
            'ciudadDestino' => 'required',
            'fechaIda' => 'required',
        ]);
 
        if ($validator->fails()) {
            return $validator->errors();
                        
        }else{
            $vuelo = new Vuelo();
            $vuelo->ciudadOrigen = $request->ciudadOrigen;
            $vuelo->ciudadDestino = $request->ciudadDestino;
            $vuelo->fechaIda = $request->fechaIda;
            $vuelo->save();

            return $vuelo;

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
        //
        $vuelo = Vuelo::find($id);
        return $vuelo;
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
        //
        $validator = Validator::make($request->all(), [
            'ciudadOrigen' => 'required',
            'ciudadDestino' => 'required',
            'fechaIda' => 'required',
        ]);
 
        if ($validator->fails()) {
            return $validator->errors();
                        
        }else{
            $vuelo =  Vuelo::findOrFail($request->id);
            $vuelo->ciudadOrigen = $request->ciudadOrigen;
            $vuelo->ciudadDestino = $request->ciudadDestino;
            $vuelo->fechaIda = $request->fechaIda;
            $vuelo->save();

            return $vuelo;

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
        //
        $vuelo = Vuelo::destroy($id);
        return $vuelo;
    }
}
