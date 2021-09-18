<?php

namespace App\Http\Controllers;

use App\CommentUserEvent;
use App\Event;
use App\Group;

use App\Photo;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;



class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $events = Event::where('category', '!=', 0)->paginate(90);
        return view('pages.turma.evento.index',[
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view('pages.turma.evento.create',[
            'groups' => $groups
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
//        dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required|numeric|between:1,2'
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
            DB::beginTransaction();
            $event = new Event();
            $event->name = $request->name;
            $event->description = $request->description;
            $event->category = $request->category;
            $event->save();
//            $event->groups()->sync($request->groupArray);

            $defineEvent = explode('/', $request->headers->get('referer'));
            if(in_array('group', $defineEvent)){
                $group = array_search('group', $defineEvent);
                $group_id = $defineEvent[$group+1];
                $event->groups()->sync($group_id);
            }
            else{
                $event->groups()->sync($request->groupArray);
            }
            DB::commit();
            return back()->with('sucesso', 'evento criado com sucesso');
        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível criar o evento - '.$exception);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        try{
            $groupsOfEvent = Group::selectRaw('groups.*')
                ->join('event_group', 'event_group.group_id', '=', 'groups.id')
                ->where('event_group.event_id', '=', $event->id)->pluck('id')->toArray();

            if($event->category == 0){
                return redirect('group/'.$groupsOfEvent[0]);
            }


            if(Auth::user()->professor!=null && Auth::user()->role!=1){
                $groupsOfUser = Group::selectRaw('groups.*')
                    ->join('group_professor', 'group_professor.group_id', '=', 'groups.id')
                    ->where('group_professor.professor_id', '=',  Auth::user()->professor->id)->pluck('id')->toArray();

                if(sizeof(array_intersect ($groupsOfEvent, $groupsOfUser)) == 0){
                    return back()->with('perigo', 'Não pode os eventos de uma turma que não leciona');
                }
            }

            if(Auth::user()->student != null){
                if(!in_array(Auth::user()->student->group->id, $groupsOfEvent)){
                    return back()->with('perigo', 'Não pode ver eventos de uma turma que não a sua');
                }
            }



            $myComment = CommentUserEvent::where('emitter_id', '=', Auth()->user()->id)->
            where('recipient_id','=', $event->id)->first();
            $comments = CommentUserEvent::where('recipient_id','=', $event->id)
                ->orderBy('updated_at', 'DESC')->get();

//            $events = Event::whereHas('groups', function (Builder $query) use($group){
//                $query->where('group_id', '=', $group->id);})->pluck('id')->ToArray();

            $photos = Photo::where('event_id', '=',$event->id)
                ->get();

//            dd($photos);


            return view('pages.turma.evento.show',
                ['event' => $event,
                    'comments' => $comments,
                    'myComment' => $myComment,
                    'photos'=>$photos]
            );
        }catch (Exception $exception) {
            return back()->with('perigo', 'Não foi possível alterar o evento - ' . $exception);
        }
    }

    public function photos(Event $event){
        $photos = Photo::where('event_id', '=', $event->id)->get();
        return response()->json($photos, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        try{
            $groupsLook = Group::whereDoesntHave('events', function (Builder $query) use($event){
                $query->where('event_id', '=', $event->id);
            })->get();
            $groupsSelected = Group::whereHas('events', function (Builder $query) use($event){
                $query->where('event_id', '=', $event->id);
            })->get();
            return view('pages.turma.evento.edit',[
                'event' => $event,
                'groupsLook' => $groupsLook,
                'groupsSelected' => $groupsSelected,
            ]);
        }catch (Exception $exception) {
            return back()->with('perigo', 'Não foi possível alterar o evento - ' . $exception);
        }



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
//            'description' => 'required',
            'category' => 'required|numeric|between:1,2'
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
            DB::beginTransaction();
            $event = Event::find($event->id);
            $event->name = $request->name;
            $event->description = $request->description;
            $event->category = $request->category;
            $event->save();
            $event->groups()->sync($request->groupArray);

            DB::commit();
            return back()->with('sucesso', 'Evento atualizado com sucesso');
        }catch (Exception $exception) {
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível alterar o evento - ' . $exception);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        try{
            DB::beginTransaction();
            $event->groups()->detach();
            $event->delete();
            DB::commit();
            return back()->with('sucesso', 'evento eliminado com sucesso');
        }catch (Exception $exception) {
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível eliminar o evento - ' . $exception);
        }

    }
}
