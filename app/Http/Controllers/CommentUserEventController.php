<?php

namespace App\Http\Controllers;

use App\CommentUserEvent;
use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CommentUserEventController extends Controller
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
        $validator = Validator::make($request->all(), ['message' => 'required']);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }


        try{
            DB::beginTransaction();
            $defineEvent = explode('/', $request->headers->get('referer'));
            if(in_array('group', $defineEvent)){
                $group = array_search('group', $defineEvent);
                $group_id = $defineEvent[$group+1];

                $event_id = Event::where('category', '=', 0)
                    ->join('event_group', 'event_group.event_id', '=', 'events.id')
                    ->where('event_group.group_id', '=', $group_id)
                    ->first();
            }
            else{
                $event = array_search('event', $defineEvent);
                $event_id = Event::find($defineEvent[$event+1]);
            }


            $comment = new CommentUserEvent();
            $comment->message = $request->message;
            $comment->recipient_id = $event_id->id;
            $comment->emitter_id = Auth()->user()->id;
            $comment->save();
            DB::commit();

            return back()->with('sucesso', 'O seu comentário foi adicionado');
        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('perigo', 'Não foi possível criar seu comentário - '.$exception);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CommentUserEvent  $commentUserEvent
     * @return \Illuminate\Http\Response
     */
    public function show(CommentUserEvent $commentUserEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CommentUserEvent  $commentUserEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentUserEvent $commentUserEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CommentUserEvent  $commentUserEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommentUserEvent $commentUserEvent)
    {
//        $validator = Validator::make($request->all(), ['message' => 'required']);
//        if ($validator->fails()) {
//            return back()->with('perigo', 'Um dos campos inseridos não é valido');
//        }
        try{
            DB::beginTransaction();
            if($request->message == null || $request->message == ""){
                $commentUserEvent->delete();
            }
            else{
                $comment = CommentUserEvent::find($commentUserEvent->id);
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
     * @param  \App\CommentUserEvent  $commentUserEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentUserEvent $commentUserEvent)
    {
        try{
            DB::beginTransaction();
            $commentUserEvent->delete();
            DB::commit();
            return back()->with('sucesso', 'Comentário eliminado');
        }catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível eliminat seu comentário - '.$exception);
        }


    }
}
