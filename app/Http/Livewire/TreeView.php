<?php

namespace App\Http\Livewire;

use App\Models\Family;
use Livewire\Component;

class TreeView extends Component
{
    public function render()
    {
        $families = Family::all();

        $parents = $families->whereNull('parent_id');

        foreach ($parents as $parent) {
            $parent->children = $families->where('parent_id', $parent->id);

            foreach ($parent->children as $child) {
                $child->children = $families->where('parent_id', $child->id);

                foreach ($child->children as $son) {
                    $son->children = $families->where('parent_id', $son->id);
                }
            }
        }

        $data = $families[0];
        
        return view('livewire.tree-view', compact('data'));
    }
}
