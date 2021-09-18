<?php

namespace App\Http\Controllers;

use App\CommentUserUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CommentUserUserController extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ['message' => 'required']);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }


        try{
            DB::beginTransaction();
            $defineEvent = explode('/', $request->headers->get('referer'));

            $user = array_search('user', $defineEvent);
            $user_id = $defineEvent[$user+1];

            $comment = new CommentUserUser();
            $comment->message = $request->message;
            $comment->recipient_id = $user_id;
            $comment->emitter_id = Auth()->user()->id;
            $comment->save();
            DB::commit();

            return back()->with('sucesso', 'O seu comentário foi adicionado');
        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('perigo', 'Não foi possível criar o seu comentário - '.$exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommentUserUser  $commentUserUser
     * @return \Illuminate\Http\Response
     */
    public function show(CommentUserUser $commentUserUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommentUserUser  $commentUserUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentUserUser $commentUserUser)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommentUserUser  $commentUserUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentUserUser $commentUserUser)
    {
//        $validator = Validator::make($request->all(), ['message' => 'required']);
//        if ($validator->fails()) {
//            return back()->with('perigo', 'Um dos campos inseridos não é valido');
//        }

        try{
            DB::beginTransaction();
            if($request->message == null || $request->message == ""){
                $commentUserUser->delete();
            }
            else{
                $comment = CommentUserUser::find($commentUserUser->id);
                $comment->message = $request->message;
                $comment->save();
            }
            DB::commit();


            return back()->with('sucesso', 'O seu comentário foi alterado');
        }catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível alterar seu comentário - '.$exception);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CommentUserUser  $commentUserUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentUserUser $commentUserUser)
    {
        try{
            DB::beginTransaction();
            $commentUserUser->delete();
            DB::commit();

            return back()->with('sucesso', 'Comentário eliminado');
        }
        catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível eliminar seu comentário - '.$exception);
        }
    }
}
