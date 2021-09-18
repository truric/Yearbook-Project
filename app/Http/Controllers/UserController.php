<?php

namespace App\Http\Controllers;

use App\County;
use App\District;
use App\Event;
use App\Parish;
use App\Photo;
use App\Group;
use App\Professor;
use App\Student;
use App\User;
use App\CommentUserUser;

use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        try{
            if(Auth::user()->student!= null){
                if($user->student!= null){
                    if(Auth::user()->student->group != $user->student->group){
                        return back()->with('perigo', 'Não pode ver o perfil de um aluno que não está a sua turma');
                    }
                }
                if($user->professor != null) {
                    $groupsOfUser = Group::selectRaw('groups.*')
                        ->join('group_professor', 'group_professor.group_id', '=', 'groups.id')
                        ->where('group_professor.professor_id', '=', $user->professor->id)->pluck('id')->toArray();

                    if(!in_array(Auth::user()->student->group_id, $groupsOfUser)){
                        return back()->with('perigo', 'Não pode ver o perfil de um professor que não lhe dê aulas');
                    }
                }
            }

            if(Auth::user()->professor != null && Auth::user()->role!=1){
                if($user->student!= null){
                    $groupsOfUser = Group::selectRaw('groups.*')
                        ->join('group_professor', 'group_professor.group_id', '=', 'groups.id')
                        ->where('group_professor.professor_id', '=', Auth::user()->professor->id)->pluck('id')->toArray();

                    if(!in_array($user->student->group_id, $groupsOfUser)){
                        return back()->with('perigo', 'Não pode ver o perfil de um aluno que não está a sua turma');

                    }
                }
            }
            $photos = Photo::selectRaw('photos.*')
                ->join('photo_user', 'photo_user.photo_id', '=', 'photos.id')
                ->where('photo_user.user_id', '=', $user->id)->get();


            $comments = CommentUserUser::where('recipient_id','=', $user->id)
                ->orderBy('updated_at', 'DESC')->get();

            $myComment = CommentUserUser::where('emitter_id', '=', Auth()->user()->id)->
            where('recipient_id','=', $user->id)->first();

            return view('pages.users.show',
                ['user' => $user,
                'comments' => $comments,
                'photos' => $photos,
                'myComment' => $myComment]
            );

        }catch(Exception $exception){
            return back()->with('perigo', 'Não foi possível ver o perfil deste alunos - '.$exception);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        try{
            if($user->id != Auth()->user()->id){
                return back()->with('perigo', 'Não pode editar um perfil que não o seu');
            }

            if(Auth::user()->student!= null){

                $districts = District::all();
                $counties = County::where('district_id', '=', $user->student->parish->county->district->id)->get();
                $parishes = Parish::where('county_id', '=', $user->student->parish->county->id)->get();

                return view('pages.users.edit',[
                    'user'=> $user,
                    'districts' => $districts,
                    'counties' => $counties,
                    'parishes' => $parishes]);
            }

            if(Auth::user()->professor!= null){
                return view('pages.users.edit',[
                    'user'=> $user]);
            }

        }
        catch(Exception $exception){
            return back()->with('perigo', 'Não foi possível ver o perfil deste aluno - '.$exception);
        }
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
//        dd($request);
        $validator = Validator::make($request->all(),
            ['name' => 'required',
                'email' => 'required|email',
                'permissionEmail'=>'between:0,1',
                'urlImagem' => 'image|mimes:jpeg,png,jpg,svg|max:1000000'
            ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try {
            DB::beginTransaction();
            if($user->student!= null) {
                $validator = Validator::make($request->all(), [
                    'phone' => 'numeric|nullable',
                    'permissionPhone'=>'between:0,1',
                    'permissionAddress'=>'between:0,1,2',
                    'parish_id' => 'numeric',
                    'nickname' => 'max:15|nullable'
                ]);
                if ($validator->fails()) {
                    return back()->with('perigo', 'Um dos campos inseridos não é valido');
                }


                $student = Student::find($user->student->id);
                $student->parish_id = $request->parish;

                $student->permissionPhone = $request->permissionPhone;
                $student->phone = $request->phone;
                $student->nickname = $request->nickname;


                if ($request->permissionAddress == 2) {
                    if(is_numeric($request->latitude) == 1 && is_numeric($request->longitude) == 1){
                        $student->latitude = $request->latitude;
                        $student->longitude = $request->longitude;
                        $student->permissionAddress = 2;

                    }
                    elseif (is_numeric($student->latitude) && is_numeric($student->longuitude)){
                        $student->permissionAddress = 2;
                    }
                    else{
                        $validationCoordenates=1;
                        $student->permissionAddress = 1;
                    }
                }
                else {
                    $student->latitude = null;
                    $student->longitude = null;
                    $student->permissionAddress = $request->permissionAddress;
                }
                $student->save();
            }



            $user->email = $request->email;
            $user->fullName = $request->name;
            $user->permissionEmail = $request->permissionEmail;

            if($request->urlImagem != null){
                $image = Image::make(request()->file('urlImagem'));
                $height=$image->height();
                $width=$image->width();
                $filename=$user->atec_id.'.jpg';
                if($height > 5000 || $width > 5000){
                    if($width==$height){
                        $image->resize(5000,5000)->save('profilePhotos/'.$filename);
                    }
                    if($width<$height){
                        $image->resize(null,5000,function ($constraint){$constraint->aspectRatio();
                        })->save('profilePhotos/'.$filename);
                    }
                    if($width>$height) {
                        $image->resize(5000, null, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save('profilePhotos/'.$filename);
                    }
                }
                else{
                    $image->save('profilePhotos/'.$filename);
                }
                $user->url = '/profilePhotos/'.$filename;
            }

            if ($request->current_password != null && $request->new_password != null && $request->new_password2 != null) {
                if (Hash::check($request->current_password, $user->password)) {
                    if (strcmp($request->new_password, $request->new_password2) == 0)
                        $user->password = Hash::make($request->new_password);
                    else {
                        return back()->with('aviso', 'Tem que escrever a nova password corretamente duas vezes');
                    }
                } else {
                    return back()->with('aviso', 'Os dados para a nova password não correspondem ao registo');
                }
            }

            $simple = explode(" ",$user->fullName);
            if(count($simple)==1){
                $user->simpleName = $request->name;
            }else{
                if($request->nickname == null)
                    $user->simpleName = $simple[0].' '.$simple[count($simple)-1];
                else{
                    $user->simpleName = $simple[0].' "'.$request->nickname.'" '.$simple[count($simple)-1];
                }
            }
            $user->save();
            if($user->professor!=null){}
                $validationCoordenates=0;

            DB::commit();

            if($validationCoordenates == 1){
                return redirect('user/' . $user->id)->with('aviso', 'Não foi possível guardar as suas coordenadas');
            }
            else{
                return redirect('user/' . $user->id)->with('sucesso', 'Perfil alterado com sucesso');
            }

        }
        catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível ver o perfil deste aluno - '.$exception);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function photos(User $user){
        $photos = Photo::selectRaw('photos.*')
            ->join('photo_user', 'photo_user.photo_id', '=', 'photos.id')
            ->where('photo_user.user_id', '=', $user->id)->get();

        return response()->json($photos, 200);
    }



}
