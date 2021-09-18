<?php

namespace App\Http\Controllers;

use App\Area;
use App\Degree;
use App\Group;
use App\Professor;
use App\User;
use App\Student;
use App\Prfessor;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\YearBookEmail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function index()
    {
        $students = Student::join('users', 'users.id', '=', 'user_id')->
                        orderby('group_id', 'desc')->orderby('users.simpleName', 'asc')->get();

        $professors = Professor::join('users', 'users.id', '=', 'user_id')->
                        orderby('users.simpleName', 'asc')->get();
        return view('mail.YearbookEmail',
            [
            'students' => $students,
                'professors' => $professors
            ]);
    }


    function send (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'emailName' => 'required',
            'emailText'=> 'required',
            'recipients' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{

            $data = array(
                'name' => $request->emailName,
                'message' => $request->emailText
            );

            foreach([$request->recipients] as $recipient){
                Mail::to($recipient)->send (new YearBookEmail($data));
            }

            return redirect('/backOffice')->with('sucesso', 'Email enviado com sucesso');
        }
        catch(Exception $exception){
            return back()->with('aviso', 'Não foi possível enviar o email - '.$exception);
        }

    }
}
