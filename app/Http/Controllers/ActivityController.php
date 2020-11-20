<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActivityController extends Controller
{

    public function index()
    {
        $activities = Activity::orderByDesc('created_at')->take(4)->get();
        $lastActivities = Activity::orderByDesc('created_at')->take(10)->select('title', 'slug')->get();

        return view('activities.index', compact('activities', 'lastActivities'));
    }

    public function create()
    {
        return view('activities.create');
    }


    public function store(Request $request)
    {


        return view('activities.create');
    }


    public function show($activity)
    {
        $activity = Activity::where('slug', $activity)->firstOrFail();
        // Trata de que se busque por el slug y no por el nombre. Vijate el la base de datos como están estructurados las tablas en migration
        return view('activities.show', compact('activity'));


    }


    public function edit($slug)
    {
        $activity = Activity::where('slug', $slug)->firstOrFail();

        return view('activities.edit', compact('activity'));
    }


    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'lead' => 'required', //Hay que ponerle un maximo de carácteres
            'body' => 'required',
            'image' => 'image',
            'state_id' => 'required|bolean',
        ]);

       $activity = Activity::where('slug', $slug)->firstOrFail();
        
       $activity->update([
            'title' => $request->title,
            'slug'  => Str::slug($request->title, '-'),
            'lead'  => $request->lead,
            'body'  => $request->body,
            'state_id' => $request->state_id,
       ]);

        $imageIsValid = $request->image ? $request->file('image')->isValid() : false;
       
        if($imageIsValid){

            $image = $request->file('image');
            $path = $image->store('activities');

            $activity->update([
                'image' => $path,
            ]);
       }//Hay que ver de que si la imagen no sea validad, 1- se actualice lo textual y permanezca la img anterio o 2- no actualizar la info haasta que ponga una img valida 
            //También tendríamos que pasarle un cartel que sigo eso de que la img no es valida

        return redirect()->back()->with('sucess', 'La actividad fue actualizada con éxito'); //Por ahora, si cargó una nueva img o no, igual se actualizará la info y no aclarará si la img es invalida (si es el caso)

    }


    public function destroy($id)
    {
        return view('activities.index'); // the same message as above, but the opposite: 'the activity was deleted successfully'.
    }
}
