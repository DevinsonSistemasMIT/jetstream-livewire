<?php

namespace App\Http\Livewire;

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
