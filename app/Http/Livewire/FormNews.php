<?php

namespace App\Http\Livewire;

use App\Models\News;
use App\Models\Entity;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FormNews extends Component
{
    use WithFileUploads;

    public function render()
    {
        $entities = Entity::all();
        return view('livewire.form-news', compact('entities'));
    }


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
}
