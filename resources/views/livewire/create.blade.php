<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    {{-- {{dd($wisata)}} --}}
    <div class="px-6 h-full">
        <div
          class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
          <div class=" w-[430px] bg-slate-300 justify-center">
              <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0 ">
                  <p class="text-[24px] text-blue-700 font-semibold text-center" >Create Data</p><br>
                  <form action="/dashboard" >
                      <label for="nama_wisata">Nama : </label><br>
                      <input type="text" wire:model = "nama_wisata" name="nama_wisata" id="nama_wisata" class="form-control block w-[270px] px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"><br>
                      <label for="harga">Harga : </label><br>
                      <input type="text" wire:model = "harga" name="harga" id="harga" class="form-control block w-[270px] px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"><br>
                      <label for="deskripsi">Deskripsi : </label><br>
                      <input type="text" wire:model="deskripsi" name="deskripsi" id="deskripsi" class="form-control block w-[270px] px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"><br>
                      <label for="gambar">Gambar : </label><br>
                      <input type="text" wire:model="gambar" name="gambar" id="gambar" class="form-control block w-[270px] px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"><br>
                      <label for="fasilitas">Fasilitas : </label><br>
                      <input type="text" wire:model="fasilitas" name="fasilitas" id="fasilitas" class="form-control block w-[270px] px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"><br>
                     <button type="button" wire:click="create"
                     class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Register</button>
              
                  </form>
              </div>
        </div>
      </div>
</div>
