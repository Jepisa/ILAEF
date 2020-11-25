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

        $newId = News::find($id);
        $new = $newId[0];
        return view('showNew', compact('id', 'new'));
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




/* 
public $title , $description, $url ,$entity_id,$file;
    
    
    
    
public function store(){
    

    $this->validate([
        'title' => 'required| min:5 | max:50',
        'description' => 'required|min:20|max:200',
        'url' => 'required|min:10|unique:news',
        'entity_id' => 'required',
        'file' => 'required|image|mimes:jpeg,png|max:3000',
    ]);


    $filename = $this->file->store('public/imagenes');
    $img = Storage::url($filename);
    

    News::create([
        'title' => $this->title,
        'description' => $this->description,
        'url' => $this->url,
        'entity_id' => $this->entity_id,
        'image' => $img,
    ]);
}
<div>
    <style>
        .alert{
            margin: 10px;
        }
        .alert ul{
            list-style: none;
        }
        .formAdmin {
            padding: 30px;
            background-color: white;
            margin-top: 50px;
        }

        .formAdmin h3 {
            color: #484646;
            text-align: center;
        }

        .formAdmin label {
            display: block;
            font-size: 19px;
            font-weight: 600;
            color: #e5313f;
        }

        .formAdmin input[type=text] {
            height: 50px;
            width: 100%;
            border-radius: 5px;
            outline: none;
            border: 1px solid #c4c4c4;
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .formAdmin input[type=text]:focus {
            border: 1px solid #2196F3;
            background-color: rgb(248, 248, 248);
        }

        .ck .ck-content {
            height: 400px;
            margin-bottom: 20px;
        }
        .formAdmin textarea{
            width: 100%;
            height: 200px;
            outline: none;
            border: 1px solid #c4c4c4;
            padding: 20px;
        }
        .formAdmin select{
            height: 50px;
            width: 30%;
            border-radius: 5px;
            outline: none;
            border: 1px solid #c4c4c4;
            margin-bottom: 20px;
            padding-left: 20px;
        }
        .formAdmin button {
            height: 50px;
            width: 200px;
            color: white;
            background: #003384;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            margin-top: 30px;
            transition: all 0.2s;
            outline: none;
        }

        .formAdmin button:hover {
            background: #264e8f;
        }

        .formAdmin button:active {
            background: #012a6d;
        }
    </style>
    <div class="container">
        <div class="formAdmin">
            <h3>
                Redacta una nueva noticia
            </h3>
            <div>
                <label for="">Titulo</label>
                <input wire:model="title" type="text" name="" id="">
            </div>
            <div>
                <label for="">URL</label>
                <input wire:model="url" type="text" name="" id="">
            </div>
            <div>
                <label for="">Descripcion</label>
                <textarea wire:model="description"></textarea>
            </div>
            <div>
                <label for="">Entidad</label>
                <select name="" id="" wire:model="entity_id">
                    <option value="">Entidad</option>
                    @foreach($entities as $entity)
                       <option value="{{$entity->id}}">{{$entity->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="">Selecciona una imagen</label>
                <input wire:model="file" type="file" name="" id="">
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div>
                <button wire:click="store">Cargar</button>
            </div>
    
        </div>        
    </div>
</div> */