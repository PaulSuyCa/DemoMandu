<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $division = Division::where('estado','=','1')
        ->get();
        return response()->json($areas, 200);
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

    public function getlistasDivision(Request $request)
    {
        $length = $request->input('length');
        $sortBy = $request->input('column');
        $searchValue = $request->input('search');
        $query = Division::table('divisiones')
            ->select('nombre','nombre_Dsup','nivel','cantidad','embajador')
            ->where('division.estado',1);

        $query->where(function ($query) use ($searchValue) {
            $query->Where("division.nombre", "LIKE", "%$searchValue%");
        });

        //paginando los datos
            $data = $query->paginate($length);
        //respuesta json
            return new DataTableCollectionResource($data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = json_decode($request->actividad, true);
        Log::info('Recibiendo datos', $datos);
        $division = Division::create(array_merge($datos));
        return response()->json($division, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //buscando area
        $divsion = Division::find($id);
        return response()->json($division,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division = Division::find($id);
        $division->estado = '1';
        $division->save();
        return response()->json($division, 200);
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
        $data_division = json_decode($request->empleado, true);
        //actualizando division
        $division = Division::find($data_division['id']);
        $division->update($data_division);
        $division->save();

        return response()->json($division, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::find($id);
        $division->estado = '0';
        $division->save();
        return response()->json($division, 200);
    }
}
