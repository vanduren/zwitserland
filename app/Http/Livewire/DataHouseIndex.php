<?php

namespace App\Http\Livewire;

use App\Models\House;
use Livewire\Component;
use Livewire\WithPagination;

class DataHouseIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.data-house-index',[
            'houses' => House::paginate(4),
        ]);
    }
}
