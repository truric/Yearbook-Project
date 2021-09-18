<?php

namespace App\Http\Controllers;

use App\Degree;
use App\Area;
use App\Professor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        $professors = Professor::whereHas('user', function (Builder $query) {
            $query->where('role', '<=', 2);
        })->get();

        return view('pages.areaDegree.degree.create',[
            'areas'=> $areas, 'professors'=> $professors
        ]);
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
            'name' => 'required',
            'area_id'=>'required',
            'code'=>'required',
//                'description' => 'required',
            'coordinator_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
            DB::beginTransaction();
            $degree = new Degree();
            $degree->name = $request->name;
            $degree->area_id = $request->area_id;
            $degree->coordinator_id = $request->coordinator_id;
            $degree->code = $request->code;
            $degree->description = $request->description;

            $degree->save();
            DB::commit();
            return redirect('backOffice/atec')->with('sucesso', 'Curso criado com sucesso');
        }catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível criar o curso ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function show(Degree $degree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function edit(Degree $degree)
    {
        $areas = Area::all();
        $professors = Professor::whereHas('user', function (Builder $query) {
            $query->where('role', '<=', 2);
        })->get();

        return view('pages.areaDegree.degree.edit', [
            'degree'=>$degree, 'areas'=>$areas, 'professors'=>$professors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degree $degree)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'area_id'=>'required',
            'code'=>'required',
//            'description' => 'required',
            'coordinator_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
            DB::beginTransaction();
            $degree = Degree::find($degree->id);
            $degree->name = $request->name;
            $degree->area_id = $request->area_id;
            $degree->coordinator_id = $request->coordinator_id;
            $degree->code = $request->code;
            $degree->description = $request->description;
            $degree->save();
            DB::commit();
            return redirect('backOffice/atec')->with('sucesso', 'Curso editado com sucesso');
        }catch(Exception $exception){
            DB::rollBack();
            return back()->with('aviso', 'Não foi possível editar o curso ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Degree  $degree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degree $degree)
    {
        try {
            DB::beginTransaction();
            $degree->delete();
            DB::commit();
            return redirect('backOffice/atec')->with('sucesso', 'Curso eliminado com sucesso');
        }
        catch(Exception $exception){
            DB::rollBack();
            return back()->with('aviso', 'Não foi possível eliminar o curso ');
        }

    }
}
