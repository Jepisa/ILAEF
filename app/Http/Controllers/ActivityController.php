<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActivityController extends Controller
{

    public function index()
    {
        $activities = Activity::orderByDesc('created_at')->take(8)->get();
        $vac = compact("activities");
        return view('activities.index',$vac);
    }

    public function create()
    {
        return view('activities.create');
    }


    public function store(Request $request)
    {


        return view('activities.create');
    }


    public function show(Activity $activity)
    {
        // Trata de que se busque por el slug y no por el nombre. Vijate el la base de datos como están estructurados las tablas en migration
        return view('activities.show', compact('activity'));


    }


    public function edit($id)
    {
        return view('activities.edit', compact('id'));
    }


    public function update(Request $request, $id)
    {
        return view('activities.index');// maybe return with a message that says 'the activity was created successfully'. Obviously in spanish
    }


    public function destroy($id)
    {
        return view('activities.index'); // the same message as above, but the opposite: 'the activity was deleted successfully'.
    }
}
