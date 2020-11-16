<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class FormNews extends Component
{
    use WithFileUploads;
    public function render()
    {
        return view('livewire.form-news');
    }


    public $title , $description, $url ,$file;
    
    
    
    public function store(){
        

        $this->validate([
            'title' => 'required| min:5 | max:50',
            'description' => 'required|min:20|max:200',
            'url' => 'required|min:10|unique:news',
            'file' => 'required|image|mimes:jpeg,png|max:3000',
            //'entity_id' => 'required'
        ]);


        $filename = $this->file->store('public/imagenes');
        $img = Storage::url($filename);
        

        News::create([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'image' => $img,
        ]);
    }
}
