<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Student;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Exports\ProfessorsExport;
use App\Imports\ProfessorImport;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;



class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professors = professor::paginate(20);
        $professors = Professor::selectRaw('professors.*')
            ->join('users', 'users.id', '=', 'professors.user_id')
            ->orderBy('users.fullName')->paginate(20);

        return view('pages.users.professor.index',
            ['professors' => $professors]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.users.professor.create');
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
            'fullName' => 'required',
            'email' => 'required|email',
            'password'=>'required',
            'atec_id'=>'required',
            'role'=>'between:0,4',
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
            DB::beginTransaction();
            $user = new User();

            $user->fullName = $request->fullName;

            $simple = explode(" ",$request->fullName);
            if(count($simple)==1){
                $user->simpleName = $request->fullName;
            }else{
                $user->simpleName = $simple[0].' '.$simple[count($simple)-1];
            }

            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->url = '/fixed/images/defaultProfilePicture.png';
            $user->atec_id = $request->atec_id;
            $user->role = $request->role;
            $user->permissionEmail =0;
            $user->save();

            $professor = new Professor();
            $professor->user_id = $user->id;
            $professor->save();

            DB::commit();
            return redirect('backOffice/users/professor/index')->with('sucesso', 'professor criado com sucesso');

        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível criar o professor - '.$exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professor)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
//        dd($professor);

        return view('pages.users.professor.edit', [
            'professor'=>$professor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'email' => 'required|email',
            'atec_id'=>'required',
            'role'=>'between:0,4',
            'urlImagem'=>'boolean',
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
            DB::beginTransaction();
            $user = User::find($professor->user->id);
            $user->fullName = $request->fullName;

            $simple = explode(" ",$request->fullName);
            if(count($simple)==1){
                $user->simpleName = $request->fullName;
            }else{
                $user->simpleName = $simple[0].' '.$simple[count($simple)-1];
            }

            $user->simpleName = $request->fullName;
            $user->email = $request->email;
            $user->atec_id = $request->atec_id;

            if($request->urlImagem==1){
                $user->url = '/fixed/images/defaultProfilePicture.png';
            }
            $user->role = $request->role;
            $user->save();

            $professor->save();
            DB::commit();
            return redirect('backOffice/users/professor/index')->with('sucesso', 'Professor alterado com sucesso');
        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível alterar o professor - '.$exception);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        try{
            DB::beginTransaction();
            $professor->groups()->detach();
            $professor->user->delete();
            $professor->delete();
            DB::commit();
            return redirect('backOffice/users/professor/index')->with('sucesso', 'professor eliminado com sucesso');
        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível alterar o professor - '.$exception);
        }

    }


    public function export()
    {
        return Excel::download(new ProfessorsExport, 'Professores.xlsx');
    }

    public function import(Request $request)
    {
        $file_professores = $request->file('file_professores');
//        $request->file('file')->store();

        Excel::import(new ProfessorImport,  $file_professores);
        return redirect('backOffice/users/professor/index')->with('success', 'Professores adicionados com sucesso');// status não está a funcionar
    }


}
