<?php

namespace App\Http\Livewire;

use App\Models\Family;
use Livewire\Component;

class TreeView extends Component
{
    public $families;

    public function mount()
    {
        $this->families = Family::whereNull('parent_id')->with('children')->get();
    }

    public function render()
    {
        return view('livewire.tree-view');
    }
}
