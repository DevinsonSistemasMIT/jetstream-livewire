<?php

namespace App\Http\Livewire;

use App\Models\Family;
use Livewire\Component;

class Recursive extends Component
{
    public $parent;
    
    public function render()
    {
        return view('livewire.recursive');
    }

    public function getData($id)
    {
        $this->emitTo('family-data', 'showData', $id);
    }
}
