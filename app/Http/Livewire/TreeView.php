<?php

namespace App\Http\Livewire;

use App\Models\Family;
use Livewire\Component;

class TreeView extends Component
{
    public function render()
    {
        $families = Family::all();

        return view('livewire.tree-view', compact('families'));
    }
}
