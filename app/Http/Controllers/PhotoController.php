<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Event;
use App\User;
use App\Group;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
//use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
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
        $validator = Validator::make($request->all(), [
            'photo.*' => 'required|image|mimes:jpeg,png,jpg,svg|max:1000000',
        ]);
        if ($validator->fails()) {
            return back()->with('perigo', 'Um dos campos inseridos não é valido');
        }

        try{
//            dd($request);
            DB::beginTransaction();
            if ($request->hasFile('photo')) {
                $i = 0;

                foreach ($request->file('photo.*') as $photo) {

                    $image = Image::make($photo);
                    $height = $image->height();
                    $width = $image->width();
                    $filename = time() . '_' . $i . '.jpg';
                    if ($height > 5000 || $width > 5000) {
                        if ($width == $height) {
                            $image->resize(5000, 5000)->save('galleryPhotos/' . $filename);
                        }
                        if ($width < $height) {
                            $image->resize(null, 5000, function ($constraint) {
                                $constraint->aspectRatio();
                            })->save('galleryPhotos/' . $filename);
                        }
                        if ($width > $height) {
                            $image->resize(5000, null, function ($constraint) {
                                $constraint->aspectRatio();
                            })->save('galleryPhotos/' . $filename);
                        }
                    } else {
                        $image->save('galleryPhotos/' . $filename);
                    }

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

                    $photo = new Photo();
                    $photo->url = 'galleryPhotos/' . $filename;
                    $photo->event_id = $event_id->id;
                    $photo->user_id = Auth()->user()->id;
                    $photo->aspect_radio = $image->height()/$image->width();
                    $photo->save();

//                    dd($photo);
                    $i++;
                }
            }
            DB::commit();
            return back()->with('sucesso', 'Fotografia adicionada com sucesso');

        }
        catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível adicionar a fotografia') ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        try{
            $groupsOfPhoto = Group::selectRaw('groups.*')
                ->join('event_group', 'event_group.group_id', '=', 'groups.id')
                ->where('event_group.event_id', '=', $photo->event->id)->pluck('id')->toArray();


            if(Auth::user()->professor!=null && Auth::user()->role!=1){
                $groupsOfUser = Group::selectRaw('groups.*')
                    ->join('group_professor', 'group_professor.group_id', '=', 'groups.id')
                    ->where('group_professor.professor_id', '=',  Auth::user()->professor->id)->pluck('id')->toArray();

                if(sizeof(array_intersect ($groupsOfPhoto, $groupsOfUser)) == 0){
                    return back()->with('perigo', 'Não pode ver fotografias que não fazem parte dos eventos da sua turma');
                }
            }

            if(Auth::user()->student != null){
                if(!in_array(Auth::user()->student->group->id, $groupsOfPhoto)){
                    return back()->with('perigo', 'Não pode ver fotografias que não fazem parte dos eventos da sua turma');
                }
            }




            $tags = User::whereHas('photos', function (Builder $query) use($photo){
                $query->where('photo_id', '=', $photo->id);})
                ->get();

            $myTag = DB::table('photo_user')
                    ->where('photo_id', '=', $photo->id)
                    ->where('user_id', '=', Auth()->user()->id)->get();


            return view('pages.foto.show',['photo' => $photo, 'tags'=>$tags, 'myTag'=>$myTag]);
        }catch (Exception $exception) {
            return back()->with('perigo', 'Não foi possível alterar o evento - ' . $exception);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        try{
            DB::beginTransaction();
            $myFile = $photo->url;
            if (File::exists($myFile)) {
                File::delete($myFile);
            }

            $event = Event::find($photo->event_id);
            $photo->users()->detach();
            $photo->delete();
            DB::commit();

            if ($event->category == 0) {
                if (Auth()->user()->student) {
                    return redirect('group/' . Auth()->user()->student->group->id.'/gallery')->with('sucesso', 'Fotografia eliminada com sucesso');
                } else {
                    return redirect('group/' . Auth()->user()->professor->last_group.'/gallery')->with('sucesso', 'Fotografia eliminada com sucesso');
                }
            } else {
                return redirect('event/' . $event->id)->with('sucesso', 'Fotografia eliminada com sucesso');
            }
        }
        catch(Exception $exception){
            DB::rollBack();
            return back()->with('perigo', 'Não foi possível eliminar a fotografia') ;
        }

    }

    public function usersAdd(Photo $photo)
    {
        try{
            $photo->users()->attach(Auth()->user());
            return back();
        }
        catch(Exception $exception){
            return back()->with('perigo', 'Não pode estar presente na mesma fotografia duas vezes') ;
        }

    }

    public function usersRemove(Photo $photo)
    {
        try{
            $photo->users()->detach(Auth()->user());
            return back();
        }
        catch(Exception $exception){
            return back()->with('perigo', $exception) ;
        }
    }
}

