<div>
  {{-- {{dd($wisata)}} --}}
    {{-- Success is as dangerous as failure. --}}
    <div>
        <div class="container">
            <h1 class="text-center mb-4 text-[50px]">Dashboard</h1>
            <div class="table ">
              <a href="#" class="btn inline-block px-6 py-2.5 bg-green-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Tambah Data</a>
              <table class="border-spacing-3 mt-5">
                <thead>
                  <tr class=" w-full gap-5 flex ">
                    <th scope="col" class="w-20">#</th>
                    <th scope="col" class="w-[100px]">Gambar</th>
                    <th scope="col" class="w-[100px]">Nama</th>
                    <th scope="col" class="w-[100px]">Deskripsi</th>
                    <th scope="col" class="w-[100px]">Harga</th>
                    <th scope="col" class="w-[100px]">Fasilitas</th>
                    <th scope="col" class="w-[100px]">Aksi</th>
                  </tr>
                </thead>
                <tbody class="table">
                  @foreach ($wisata as $wst)
                  <tr class="w-full gap-5 flex">
                    <th scope="row" class="w-20">{{$loop->iteration}}</th>
                    {{-- <td class="w-25"><img src="{{ Storage::url($wst->gambar) }}" class="w-25"></td> --}}
                    <td class="w-[100px]">{{$wst->gambar }}</td>
                    <td class="w-[100px]">{{$wst->nama_wisata }}</td>
                    <td class="w-[100px]">{{$wst->deskripsi}}</td>
                    <td class="w-[100px]">{{$wst->harga}}</td>
                    <td class="w-[100px]">{{$wst->fasilitas}}</td>
                    <td>
                      <button class="" wire:click="cakEdit({{$wst->id}})">edit</button>
                      {{-- <a href="{{route('edit', $wst->id)}}"><button>edit</button></a> --}}
                      {{-- <button  type="button" class="btn btn-primary" wire:click="{{route('edit', $wst->id)}}">Edit</button> --}}
                      {{-- <a href="{{  }}" type="button" class="btn btn-danger" >Delete</a> --}}
                      <button wire:click="destroy({{$wst->id}})">delete</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
</div>
