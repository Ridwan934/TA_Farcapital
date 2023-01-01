<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Detail extends Component
{
    public function detail($id){
        $wisata = Wisata::query()->where("id", $id)->first();
        return view ("detail", compact('wisata'));
    }
    public function render()
    {
        return view('livewire.detail');
    }
}