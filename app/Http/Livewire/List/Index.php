<?php

namespace App\Http\Livewire\List;

use Livewire\Component;
use App\Models\wisata;

class Index extends Component
{
    private $wisata; //ini atribut komponen

    public function mount(){
        $this->wisata = Wisata::query()->get();
    }

    // public function index () {
        
        
    //     return view ('index', compact('wisata'));
    // }
    
    public function render()
    {
        //$wisata = $this->wisata; //karena ini mau dikirim ke view, sedangkang di view gaada atribut $wisata, maka bikin variabel $wisata di fuction render.
       // return view('livewire.list.index', compact('wisata'));
        return view('livewire.list.index');
        
    }
}