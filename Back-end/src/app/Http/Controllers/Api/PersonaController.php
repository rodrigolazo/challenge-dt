<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $persona = Persona::all();
        return $persona;

        
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
            'nombre' => 'required',
            'fechaNacimiento' => 'required',
            'telefono' => 'required',
        ]);
 
        if ($validator->fails()) {
            return $validator->errors();
                        
        }else{
            $persona = new Persona();
            $persona->nombre = $request->nombre;
            $persona->fechaNacimiento = $request->fechaNacimiento;
            $persona->telefono = $request->telefono;
            $persona->save();

            return $persona;

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
        $persona = Persona::find($id);
        return $persona;
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
            'nombre' => 'required',
            'fechaNacimiento' => 'required',
            'telefono' => 'required',
        ]);
 
        if ($validator->fails()) {
            return $validator->errors();
                        
        }else{
            $persona = Persona::findOrFail($request->id);
            $persona->nombre = $request->nombre;
            $persona->fechaNacimiento = $request->fechaNacimiento;
            $persona->telefono = $request->telefono;
            $persona->save();

            return $persona;

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
        $persona = Persona::destroy($id);
        return $persona;
    }
}
