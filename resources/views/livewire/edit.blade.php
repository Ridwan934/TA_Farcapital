<div>
   
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="container border-2 mt-5">
        <form method="POST" wire:submit.prevent="update"  enctype="multipart/form-data">
            {{-- action="{{route('/update', $wisata->id_wisata)}}" action="/update/id_wisata"--}}
            @csrf
            @method('PUT')
            <div class="mb-3 ">
                <label for="nama_wisata"  class="form-label">Nama</label>
                <input type="text" wire:model="nama_wisata" class="form-control border-2 mx-10" id="nama_wisata" name="nama_wisata" value="{{$wisata->nama_wisata}}">
              </div>
              <div class="mb-3">
                <label for="harga"  class="form-label">Harga</label>
                <input type="text" wire:model="harga" class="form-control mx-10 border-2" id="harga" name="harga" value="{{$wisata->harga}}">
              </div>
              <div class="mb-3">
                <label for="deskripsi"  class="form-label">Deskripsi</label>
                <input type="text" wire:model="deskripsi" class="form-control mx-5 border-2" id="deskripsi" name="deskripsi" value="{{$wisata->deskripsi}}">
              </div>
              <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text"  wire:model="gambar" class="form-control mx-7 border-2" id="gambar" name="gambar" value="{{$wisata->gambar}}">
              </div>
              <div class="mb-3">
                <label for="fasilitas" class="form-label">Fasilitas</label>
                <input type="text" wire:model="fasilitas" class="form-control mx-8 border-2" id="fasilitas" name="fasilitas" value="{{$wisata->fasilitas}}">
              </div>
              <button type="submit"  class="btn ml-5 inline-block px-6 py-2.5 bg-green-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ">Simpan</button>
        </form>

    </div>
</div>
