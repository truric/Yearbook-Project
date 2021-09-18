<?php

namespace App\Http\Controllers;

use App\Area;
use App\CommentUserEvent;
use App\Degree;
use App\Group;
use App\Professor;
use App\Student;
use App\User;
use App\Event;
use App\Photo;
//use App\Coordinates;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
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
        $areas = Area::all();
        $degrees = Degree::all();

        $professors = Professor::whereHas('user', function (Builder $query) {
            $query->where('role', '<', 4);
        })->get();


        return view('pages.turma.create',[
            'areas' => $areas,
            'degrees' => $degrees,
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
            'month' => 'required|numeric|between:1,12',
            'year' => 'required|numeric',
            'city' => 'required|starts_with:P,L|max:1',
            'area' => 'required|numeric',
            'degree_id'=>'required|numeric',
            'coordinator_id'=>'required'
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
            DB::beginTransaction();
            $group = new Group();

            $degreeTemp = Degree::find($request->degree_id);
            if($request->month<10)
                $monthTemp='0'.$request->month;
            else
                $monthTemp=$request->month;
            $group->name = $degreeTemp->code.$request->city.'.'.$monthTemp.substr($request->year, -2);

            $group->coordinator_id = $request->coordinator_id;
            $group->degree_id = $request->degree_id;
            $group->month = $request->month;
            $group->year = $request->year;
            $group->city = $request->city;
            $group->save();


            $group->professors()->attach($request->coordinator_id);
            if($group->degree->coordinator_id!=null){
                $group->professors()->attach($group->degree->coordinator_id);
            }
            if($group->degree->area->coordinator_id!=null){
                $group->professors()->attach([$group->degree->area->coordinator_id]);
            }


            $event = new Event();
            $event->name = 'Evento Galeria da Turma '.$group->name;
            $event->category = 0;
            $event->save();
            $event->groups()->attach($group);

            DB::commit();


            return redirect('backOffice')->with('sucesso', 'turma criada com sucesso');

        }catch(Exception $exception){
            DB::rollBack();
            return redirect::back()->with('aviso', 'Não foi possível alterar a turma - '.$exception);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        if(Auth::user()->professor!=null && Auth::user()->role!=1){
            $groupsOfUser = Group::selectRaw('groups.*')
                ->join('group_professor', 'group_professor.group_id', '=', 'groups.id')
                ->where('group_professor.professor_id', '=',  Auth::user()->professor->id)->pluck('id')->toArray();
            if(!in_array($group->id, $groupsOfUser)){
                return back()->with('perigo', 'Não pode ver uma turma que não lecciona');
            }
        }

        if(Auth::user()->student && Auth()->user()->student->group != $group){
            return back()->with('perigo', 'Não pode aceder a uma turma a que não pertence');
        }





        if(Auth()->user()->professor){
            $user = Auth::user();
            $user->professor->last_group = $group->id;
            $user->professor->save();
        }


        $students = User::selectRaw('users.*')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('group_id','=',$group->id)
            ->orderBy('category', 'asc')
            ->orderBy('simpleName', 'asc')->get();


        $studentsCoordinates = User::selectRaw('users.simpleName, users.url, students.latitude, students.longitude')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->where('group_id','=', $group->id)
            ->whereNotNull('latitude')->whereNotNull('longitude')
            ->get();
//            dd($studentsCoordinates);


        $studentsName = collect($studentsCoordinates)->pluck('simpleName')->toArray();
        $studentsUrl = collect($studentsCoordinates)->pluck('url')->toArray();
        $studentsLatitude = collect($studentsCoordinates)->pluck('latitude')->toArray();
        $studentsLongitude = collect($studentsCoordinates)->pluck('longitude')->toArray();

        $arrayCoord = [];
        for ($i = 0; $i< sizeof($studentsCoordinates); $i++) {
            array_push($arrayCoord, [$studentsName[$i], $studentsUrl[$i], $studentsLatitude[$i], $studentsLongitude[$i]]);
        }

        $event = Event::whereHas('groups', function (Builder $query) use($group){
            $query->where('group_id', '=', $group->id)->where('category','=', 0);
        })->first();


        $comments = CommentUserEvent::where('recipient_id','=', $event->id)
                ->orderBy('updated_at', 'DESC')->get();

        $professors = User::selectRaw('users.*')
                ->join('professors', 'professors.user_id', '=', 'users.id')
                ->join('group_professor', 'group_professor.professor_id', '=', 'professors.id')
                ->where('group_professor.group_id', '=', $group->id)->get();


        $myComment = CommentUserEvent::where('emitter_id', '=', Auth()->user()->id)->
                                       where('recipient_id','=', $event->id)->first();

        $groupCity = Group::selectRaw('groups.city')
                    ->where('id', '=', $group->id)->pluck('city')->toArray();

//        dd($myComment);

        return view('pages.turma.show',[
            'group' => $group,
            'students' => $students,
//            'studentComments' => $studentComments,
//            'professorComments' => $professorComments,
            'comments' => $comments,
            'professors' => $professors,
            'event' => $event,
            'myComment' => $myComment,
            'arrayCoord' => $arrayCoord,
            'groupCity' => $groupCity
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        if(Auth::user()->professor!=null && Auth::user()->role!=1){
            $groupsOfUser = Group::selectRaw('groups.*')
                ->where('groups.coordinator_id', '=',  Auth::user()->professor->id)->pluck('id')->toArray();

            if(!in_array($group->id, $groupsOfUser)){
                return back()->with('perigo', 'Não editar turma não sendo o seu coordenador');
            }
        }

        try{
            $areas = Area::all();
            $degrees = Degree::all();
            $professors = Professor::whereHas('user', function (Builder $query) {
                $query->where('role', '<', 4);
            })->get();

            $professorsLook = Professor::whereDoesntHave('groups', function (Builder $query) use($group){
                $query->where('group_id', '=', $group->id);
            })->get();

            $professorsSelected = Professor::whereHas('groups', function (Builder $query) use($group){
                $query->where('group_id', '=', $group->id);
            })->get();

            $studentsLook = Student::whereNull('group_id')->get();
            $studentsSelected = Student::where('group_id', '=', $group->id)->get();


            $events = Event::whereHas('groups', function (Builder $query) use($group){
                $query->where('group_id', '=', $group->id);
            })->where('category', '!=', 0)->get();


            return view('pages.turma.edit',[
                'group' => $group,
                'areas' => $areas,
                'degrees' => $degrees,
                'professors' => $professors,
                'professorsLook' => $professorsLook,
                'professorsSelected' => $professorsSelected,
                'studentsLook' => $studentsLook,
                'studentsSelected' => $studentsSelected,
                'events' => $events
            ]);


        }catch(Exception $exception){
            return back()->with('perigo', 'Não foi possível alterar a turma - '.$exception);
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $validator = Validator::make($request->all(), [
            'month' => 'required|numeric|between:1,12',
            'year' => 'required|numeric',
            'city' => 'required|starts_with:P,L|max:1',
            'area' => 'required|numeric',
            'degree_id'=>'required|numeric',
            'coordinator_id'=>'required|numeric'
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
            DB::beginTransaction();
            $group = Group::find($group->id);
            $degreeTemp = Degree::find($request->degree_id);
            if($request->month<10)
                $monthTemp='0'.$request->month;
            else
                $monthTemp=$request->month;
            $group->name = $degreeTemp->code.$request->city.'.'.$monthTemp.substr($request->year, -2);

            $group->coordinator_id = $request->coordinator_id;
            $group->degree_id = $request->degree_id;
            $group->month = $request->month;
            $group->year = $request->year;
            $group->city = $request->city;
            $group->save();

            foreach($group->students as $item){
                $student = Student::find($item->id);
                $student->group_id = null;
                $student->category = 0;
                $student->save();
            }

            if($request->studentsArray != null){
                foreach ($request->studentsArray as $item){
                    $student = Student::find($item);
                    $student->group_id = $group->id;

                    if($student->id == $request->delegado){
                        $student->user->role = 5;
                        $student->category=1;
                    }
                    elseif($student->id == $request->subdelegado){
                        $student->user->role = 5;
                        $student->category=2;
                    }
                    else{
                        $student->user->role = 6;
                        $student->category=3;
                    }
                    $student->save();
                }
            }

            $eventList = Event::whereHas('groups', function (Builder $query) use($group){
                $query->where('group_id', '=', $group->id);
            })->where('category', '=', 0)->get();

            foreach($eventList as $event)
            $event->name = 'evento Galeria da turma'.$group->name;
            $event->save();
            $group->professors()->sync($request->professorsArray);
            DB::commit();
            return redirect('backOffice')->with('sucesso', 'turma atualizada com sucesso');

        }catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível alterar a turma - '.$exception);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        try{
            DB::beginTransaction();
            $group->professors()->detach();

            $students = Student::where('group_id', '=', $group->id)->get();
            if($students != null){
                foreach($students as $student){
                    $student->group_id = null;
                    $student->save();
                }
            }

            $professors = Professor::where('last_group', '=', $group->id)->get();
            foreach ($professors as $professor){
                $professor->last_group = null;
                $professor->save();
            }

            $event_cat0 = Event::whereHas('groups', function (Builder $query) use($group){
                $query->where('group_id', '=', $group->id)->where('category', '=', 0);
            })->first();


            $comments = CommentUserEvent::where('recipient_id', '=', $event_cat0->id)->get();

            $group->events()->detach();

            foreach ($comments as $comment){
                $comment->delete();
            }
            $event_cat0->delete();
            $group->delete();
            DB::commit();
            return redirect('backOffice')->with('sucesso', 'turma eliminada com sucesso');
        }catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível apagar a turma - '.$exception);
        }

    }


    public function gallery(Group $group)
    {
        if(Auth::user()->professor!=null && Auth::user()->role!=1){
            $groupsOfUser = Group::selectRaw('groups.*')
                ->join('group_professor', 'group_professor.group_id', '=', 'groups.id')
                ->where('group_professor.professor_id', '=',  Auth::user()->professor->id)->pluck('id')->toArray();
            if(!in_array($group->id, $groupsOfUser)){
                return back()->with('perigo', 'Não pode ver a galeria de uma turma que não lecciona');
            }
        }


        if(Auth::user()->student && Auth()->user()->student->group != $group){
            return back()->with('perigo', 'Não pode aceder à galeira de uma turma a que não pertence');
        }

        if(Auth()->user()->professor){
            $user = Auth::user();
            $user->professor->last_group = $group->id;
            $user->professor->save();
        }

        $event = Event::whereHas('groups', function (Builder $query) use($group){
            $query->where('group_id', '=', $group->id)->where('category','==', 0);
        })->first();

        return view('pages.turma.gallery',
            ['event' => $event]);
    }


    public function photos(Group $group)
    {
        $events = Event::whereHas('groups', function (Builder $query) use($group){
            $query->where('group_id', '=', $group->id);})->pluck('id')->ToArray();

        $photos = Photo::selectRaw('photos.id, photos.url, photos.aspect_radio, events.category')
            ->join('events', 'photos.event_id', '=', 'events.id')
            ->whereIn('photos.event_id', $events)
            ->orderBy('events.category','ASC')
            ->get();

        return response()->json($photos, 200);
    }

    public function events(Group $group){

        if(Auth::user()->professor!=null && Auth::user()->role!=1){
            $groupsOfUser = Group::selectRaw('groups.*')
                ->join('group_professor', 'group_professor.group_id', '=', 'groups.id')
                ->where('group_professor.professor_id', '=',  Auth::user()->professor->id)->pluck('id')->toArray();
            if(!in_array($group->id, $groupsOfUser)){
                return back()->with('perigo', 'Não pode ver os eventos de uma turma que não lecciona');
            }
        }
        if(Auth::user()->student && Auth()->user()->student->group != $group){
            return back()->with('perigo', 'Não pode ver os eventos de uma turma a que não pertence');
        }

        if(Auth()->user()->professor){
            $user = Auth::user();
            $user->professor->last_group = $group->id;
            $user->professor->save();
        }


        $events = Event::whereHas('groups', function (Builder $query) use($group){
            $query->where('group_id', '=', $group->id)->where('category','!=', 0);
        })->get();


        $photo_events=collect([]);
        foreach($events as $event){
            $photo_events = $photo_events->merge([Photo::where('event_id','=', $event->id)->take(3)->get()]);
        }

        $photos=collect([]);
        for($i=0;$i<sizeof($events); $i++){
            $photos = $photos->merge($photo_events[$i]);
        }

        return view('pages.turma.evento.event_list',[
            'events' => $events,
            'photos' => $photos
        ]);
    }

    public function slogan(Request $request, Group $group){
        try{
            DB::beginTransaction();
            $group->slogan = $request->slogan;
            $group->save();
            DB::commit();
            return back()->with('sucesso', 'O slogan da turma foi alterado');
        }catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível alterar adicionar o slogan à turma - '.$exception);
        }
    }


    public function institution(Group $group){
        try{
            if(Auth::user()->professor!=null && Auth::user()->role!=1){
                $groupsOfUser = Group::selectRaw('groups.*')
                    ->join('group_professor', 'group_professor.group_id', '=', 'groups.id')
                    ->where('group_professor.professor_id', '=',  Auth::user()->professor->id)->pluck('id')->toArray();
                if(!in_array($group->id, $groupsOfUser)){
                    return back()->with('perigo', 'Não pode aceder a uma turma a que não lecciona');
                }
            }

            if(Auth::user()->student && Auth()->user()->student->group != $group){
                return back()->with('perigo', 'Não pode aceder a uma turma a que não pertence');
            }

//            dd($group->degree->area->coordinator_id);

            $areaCoordinator = Professor::find($group->degree->area->coordinator_id);
            $degreeCoordinator = Professor::find($group->degree->coordinator_id);
            $groupCoordinator = Professor::find($group->coordinator_id);

            $groupDelegate = Student::where('group_id', '=', $group->id)->
                                        where('category', '=', 1)->first();
            $groupSubdelegate = Student::where('group_id', '=', $group->id)->
                                        where('category', '=', 2)->first();

//            dd($groupSudelegate);

            return view('pages.turma.institution',[
                'group' => $group,
                'areaCoordinator' => $areaCoordinator,
                'degreeCoordinator' => $degreeCoordinator,
                'groupCoordinator' => $groupCoordinator,
                'groupDelegate' => $groupDelegate,
                'groupSubdelegate' => $groupSubdelegate
            ]);

        }catch(Exception $exception){
            return back()->with('perigo', 'Não foi possível alterar adicionar o slogan à turma - '.$exception);
        }
    }

}
