<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class Activities extends Component
{

    use WithPagination;

    public $search = '';
    protected $activities;
    public $lastActivities;
    public $categories;
    public $tags;


    // public function mount($)
    // {
    //     $this->search = $search;
    // }

    public function __construct()
    {
        $this->categories = Category::orderByDesc('created_at')->take(13)->get();
        $this->tags = Tag::orderByDesc('created_at')->take(13)->get();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if (trim($this->search)) {
            $this->activities = Activity::where('title', 'like', '%'.$this->search.'%')
            ->orWhere('lead', 'like', '%'.$this->search.'%')                            
            ->orWhere('body', 'like', '%'.$this->search.'%')                            
            ->paginate(5);
        }else{
            $this->activities = Activity::orderByDesc('created_at')->take(4)->get();
        }
            $this->lastActivities = Activity::orderByDesc('created_at')->take(10)->select('title', 'slug')->get();

        return view('livewire.activities',['activities' => $this->activities ]);
    }
}