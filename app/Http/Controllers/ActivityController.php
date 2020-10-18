<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('activities');
    }

    public function create()
    {
        return view('activityCreate');
    }


    public function store(Request $request)
    {


        return view('activityCreate');
    }


    public function show($activity)
    {
        // Trata de que se busque por el slug y no por el nombre. Vijate el la base de datos como están estructurados las tablas en migration
        return view('showActivity', compact('activity'));


    }


    public function edit($id)
    {
        return view('editActivity', compact('activity'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view('activities');// maybe return with a message that says 'the activity was created successfully'. Obviously in spanish
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('activities'); // the same message as above, but the opposite: 'the activity was deleted successfully'.
    }
}
