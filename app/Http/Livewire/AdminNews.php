<?php

namespace App\Http\Livewire;

use App\Models\News;
use App\Models\Entity;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class AdminNews extends Component
{ 
    
    
    use WithFileUploads;
    public $view = 'create';
    public $title ,$url, $description, $entity_id , $file, $new_id;



    public function render()
    {
        return view('livewire.admin-news',[
            'news' => News::orderBy('created_at', 'desc')->limit(8)->get(),
            'entities' => Entity::all(),
        ]);
    }

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

        $this->default();
    }


    public function edit($id){

        $new = News::find($id);

        $this->new_id = $new->id;
        $this->title = $new->title;
        $this->description = $new->description;
        $this->url = $new->url;
        $this->entity_id = $new->entity_id;

        $this->view = 'edit';
    }



    public function update(){

        $new = News::find($this->new_id);

        $this->validate([
            'title' => 'required| min:5 | max:50',
            'description' => 'required|min:20|max:200',
            'url' => 'required|min:10|',
            'entity_id' => 'required',
            'file' => 'required|image|mimes:jpeg,png|max:3000',
        ]);
       
        $new->update([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'entity_id' => $this->entity_id,
            'image' => $this->file,
        ]);

        $this->default();
    }



    public function destroy($id){
        News::destroy($id);
    }



    public function default(){
        $this->title = '';
        $this->description = '';
        $this->url = '';
        $this->entity_id = '';
        
        $this->view = 'create';
    }


}
