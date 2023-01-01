<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Wisata;
class Update extends Component
{
    public $nama_wisata;
    public $harga;
    public $deskripsi;
    public $gambar;
    public $fasilitas;
    public $id_wisata;
    public function mount(){
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
          $wisata = Wisata::find($this->id_wisata);
          if ($wisata)
          $wisata->update ([
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
        return view('livewire.update');
    }
} 