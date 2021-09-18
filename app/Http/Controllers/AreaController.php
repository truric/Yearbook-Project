<?php

namespace App\Http\Controllers;

use App\Area;
use App\Degree;
use App\Professor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $areas = area::orderBy('id')->paginate(2);
//        $degrees = degree::orderBy('id')->paginate(2);
        $areas = Area::all();
        $degrees = Degree::all();


        return view('pages.areaDegree.index', ['areas'=>$areas, 'degrees'=>$degrees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professors = Professor::whereHas('user', function (Builder $query) {
            $query->where('role', '<=', 2);
        })->get();
        return view('pages.areaDegree.area.create',[
            'professors' => $professors
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
//            'description' => 'required',
            'coordinator_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }



        try{
            DB::beginTransaction();
            $area = new Area();
            $area->name = $request->name;
            $area->coordinator_id = $request->coordinator_id;
            $area->description = $request->description;
            $area->save();
            DB::commit();
            return redirect('backOffice/atec')->with('sucesso', 'Área criada com sucesso');
        }catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível criar a área ');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        $professors = Professor::whereHas('user', function (Builder $query) {
            $query->where('role', '<=', 2);
        })->get();

        return view('pages.areaDegree.area.edit', [
            'area'=>$area, 'professors'=>$professors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
//            'description' => 'required',
            'coordinator_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }


        try{
            DB::beginTransaction();
            $area = Area::find($area->id);
            $area->name = $request->name;
            $area->coordinator_id = $request->coordinator_id;
            $area->description = $request->description;

            $area->save();

            DB::commit();
            return redirect('backOffice/atec')->with('sucesso', 'Área atualizada com sucesso');
        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível atualizar a área ');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        try{
            DB::beginTransaction();
            $area->delete();
            DB::commit();
            return redirect('backOffice/atec')->with('sucesso', 'Área eliminada com sucesso');
        } catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível atualizar a área ');
        }

    }
}
