<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(NewsRequest $request)
    {
        $imageIsValid = $request->file('image')->isValid();

        if ($imageIsValid) {
            $image = $request->file('image');
            $path = $image->store('news');

            News::create([
                'title' => $request->title,
                'description' => $request->description,
                'url' => $request->url,
                'country_id' => $request->country_id,
                'image' => $path,
                'state_id' => $request->state_id,
            ]);
        }

        return view('welcome');

        //$path = Storage::disk('local')->putFileAs('news', $image, $newName); //url donde se guardo
    }

    public function show(News $id)
    {

        return view('news.show', compact('id'));
    }

    public function edit( News $id)
    {
        return $id;
        //return view('news.edit', compact('news'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  El método copy puede usarse para copiar un archivo existente a una nueva ubicación en el disco,
        // mientras que el método move puede usarse para cambiar el nombre o mover un archivo existente a una nueva ubicación:

    //Storage::copy('old/file.jpg', 'new/file.jpg');

    //Storage::move('old/file.jpg', 'new/file.jpg');

        return view('welcome');// maybe return with a message that says 'the activity was created successfully'. Obviously in spanish
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Storage::disk('local')->delete('folder_path/file_name.jpg');

        return view('welcome'); // the same message as above, but the opposite: 'the activity was deleted successfully'.
    }
}
