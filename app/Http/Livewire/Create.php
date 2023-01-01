<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Wisata;

class Create extends Component
{
    public $nama_wisata;
    public $harga;
    public $deskripsi;
    public $gambar;
    public $fasilitas;
    // private $wisata;
    // public function mount(){
    //     $this->wisata = Wisata::query()->get();

    // } 
    public function create () {
        $payload = [
            'nama_wisata' => $this->nama_wisata,
            'harga' => $this->harga,
            'deskripsi' => $this->deskripsi,
            'gambar' => $this->gambar,
            'fasilitas' => $this->fasilitas,
        ];
        Wisata::query()->create($payload);
        // return redirect('/produk/list')->with(['success' => 'Data berhasil di tambahkan!']);
    }
    public function render()
    {
       // $wisata = $this->wisata; //karena ini mau dikirim ke view, sedangkang di view gaada atribut $wisata, maka bikin variabel $wisata di fuction render.
     
        return view('livewire.create');
    }
}