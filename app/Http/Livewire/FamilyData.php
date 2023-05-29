<?php

namespace App\Http\Livewire;

use App\Models\Family;
use Livewire\Component;

class FamilyData extends Component
{
    public $data;
    
    protected $listeners = ['showData'];
    
    public function render()
    {
        return view('livewire.family-data');
    }

    public function showData($id)
    {
        $this->data = Family::find($id);
    }
}
