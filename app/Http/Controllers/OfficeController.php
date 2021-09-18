<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Group;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class OfficeController extends Controller
{
    public function login()
    {
        if(Auth::user()){
            return redirect()->action([OfficeController::class, 'verifyUserRole']);
        }
        else{
            return view('auth.login');
        }
    }

    public function loading(){
//        return redirect('loading');
        return view('pages.loading');
    }


    public function verifyUserRole()
    {
        $user = Auth::user();
//        dd($user->student->group_id);
        if($user->professor != null){
            if($user->professor->last_group == null){
                return redirect('/backOffice');
            }
            else{
//                $group = Group::find($user->professor->last_group);
                return redirect('group/'.$user->professor->last_group);
            }
        }
        else{
            if($user->student->group_id != null){
                return redirect('group/'.$user->student->group_id);
            }
            else{
                return view('pages.backOffice.logIn_student_error');
            }

        }
    }


    public function introBackOffice()
    {

        if(Auth()->user()->role==1){
            $groups  = Group::all();
            $groupsToEdit  = Group::all();
        }
        if(Auth()->user()->role > 1){
            $groups= Group::selectRaw('groups.*')
                ->join('group_professor', 'group_professor.group_id', '=', 'groups.id')
                ->where('group_professor.professor_id', '=', Auth()->user()->professor->id)->get();

            $groupsToEdit  = Group::where('coordinator_id', '=', Auth()->user()->professor->id)->get();

        }

        return view('pages.backOffice.intro',[
            'groups' => $groups,
            'groupsToEdit' => $groupsToEdit
        ]);
    }


    public function logout (Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }



}
