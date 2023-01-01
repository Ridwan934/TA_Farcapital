<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Wisata;

class Edit extends Component
{
    public $nama_wisata;
    public $harga;
    public $deskripsi;
    public $gambar;
    public $fasilitas;
    public $id_wisata;
    public $wisata;
  
    public function mount(){
        $this->wisata = Wisata::findOrFail($this->id_wisata)->first();
    $this->nama_wisata = $this->wisata->nama_wisata;
    $this->harga = $this->wisata->harga;
    $this->deskripsi = $this->wisata->deskripsi;
    $this->gambar = $this->wisata->gambar;
    $this->fasilitas = $this->wisata->fasilitas;
   
    }
    public function update (){
      
        $this->validate([
          'nama_wisata' => 'required',
          'harga' => 'required',
          'deskripsi' => 'required',
          'gambar' => 'required',
          'fasilitas' => 'required',
         ]);
       
          if ($this->id_wisata) {
           
            if ($this->wisata)
            $this->wisata->update ([
              'nama_wisata' => $this->nama_wisata,
              'harga' => $this->harga,
              'deskripsi' => $this->deskripsi,
              'gambar' => $this->gambar,
              'fasilitas' => $this->fasilitas
            ]);
            return redirect ()->route('dashboard');
          }
      }
    public function render()
    {
        $wisata = $this->wisata;
        $id_wisata = $this->id_wisata;
        return view('livewire.edit');
    }
}