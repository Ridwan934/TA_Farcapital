<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wisata;

class Dashboard extends Component
{
    public $wisata;
    public $id_wisata;
    public function mount(){
        $this->wisata = Wisata::query()->get();
    } 

    public function cakEdit($id)
    {
        return redirect('/wisata/edit/'.$id);
    }
    


    public function destroy ($id){
    // dd($id);
        $wisata = Wisata::query()->where("id", $id)->first();
        $wisata->delete();
        return redirect('dashboard');
    }
    public function render()
    {
        $wisata = $this->wisata;
     //karena ini mau dikirim ke view, sedangkang di view gaada atribut $wisata, maka bikin variabel $wisata di fuction render.

        // return view('livewire.create', compact('wisata'));
        return view('livewire.dashboard', compact('wisata'));
    }
}