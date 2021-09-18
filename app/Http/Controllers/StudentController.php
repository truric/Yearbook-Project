<?php

namespace App\Http\Controllers;

use App\County;
use App\District;
use App\Group;
use App\Parish;
use App\Student;
use App\User;
use Illuminate\Support\Facades\Hash;

use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $students = Student::paginate(20);

        $students = Student::selectRaw('students.*')
                ->join('users', 'users.id', '=', 'students.user_id')
                ->orderBy('users.fullName')->paginate(20);


        return view('pages.users.aluno.index',
            ['students' => $students]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();

        return view('pages.users.aluno.create',[
            'districts' => $districts,
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
            'fullName' => 'required',
            'email' => 'required|email',
            'password'=>'required',
            'atec_id'=>'required',
            'parish_id'=> 'numeric|nullable']);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é válido');
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
            $user->role = 6;
            $user->permissionEmail =0;
            $user->save();

            $student = new Student();
            $student->user_id = $user->id;

//            $student->group_id = $request->group_id;
            $student->category = 3;
            $student->parish_id = $request->parish_id;
            $student->nickname = $request->nickname;
            $student->phone = null;
            $student->permissionPhone =0;
            $student->permissionAddress =0;


            $student->save();
            DB::commit();

            return redirect('backOffice/users/student/index')->with('sucesso', 'aluno criado com sucesso');


        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível criar o professor - '.$exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
//        dd($student);

        $districts = District::all();


        if($student->parish_id != null){
            $counties = County::where('district_id', '=', $student->parish->county->district->id)->get();
            $parishes = Parish::where('county_id', '=', $student->parish->county->id)->get();
        }
        else{
            $counties =[];
            $parishes =[];
        }


        return view('pages.users.aluno.edit',[
            'student' => $student,
            'districts' => $districts,
            'counties' => $counties,
            'parishes' => $parishes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'email' => 'required|email',
            'atec_id'=>'required',
            'parish_id' => 'numeric|nullable',
            'urlImagem'=>'boolean',
            'nickName'=>'boolean',]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
            DB::beginTransaction();
            $student = Student::find($student->id);
            $student->category = $student->category;
            $student->parish_id = $request->parish_id;
            if($request->nickName==1){
                $student->nickname = null;
            }
            $student->save();

            $user = User::find($student->user->id);

            $user->fullName = $request->fullName;

            $simple = explode(" ",$request->fullName);
            if(count($simple)==1){
                $user->simpleName = $request->fullName;
            }else{
                if($user->student->nickname == null)
                    $user->simpleName = $simple[0].' '.$simple[count($simple)-1];
                else{
                    $user->simpleName = $simple[0].' "'.$user->student->nickname.'" '.$simple[count($simple)-1];
                }
            }

            $user->email = $request->email;

            if($request->urlImagem==1){
                $user->url = '/fixed/images/defaultProfilePicture.png';
            }

            $user->atec_id = $request->atec_id;
            $user->save();
            DB::commit();


            return redirect('backOffice/users/student/index')->with('sucesso', 'Aluno alterado com sucesso');

        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível editar o aluno - '.$exception);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        try{
            DB::beginTransaction();
            $student->user->delete();
            $student->delete();
            DB::commit();
            return redirect('backOffice/users/student/index')->with('sucesso', 'aluno eliminado com sucesso');
        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível eliminar o professor - '.$exception);
        }
    }

    public function export()
    {
        return Excel::download(new StudentExport, 'Alunos.xlsx');
    }

    public function import(Request $request)
    {
        $file_alunos = $request->file('file_alunos');
//        $request->file('file')->store();

        Excel::import(new StudentImport,  $file_alunos);
        return redirect('backOffice/users/student/index')->with('success', 'Alunos adicionados com sucesso'); // status não está a funcionar
    }
}
