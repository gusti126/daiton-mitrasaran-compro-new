<div class="bg-white rounded-lg p-3">
    @section('title')
        Artikel {{ $item->title }}
    @endsection
    <div class="grid grid-flow-row grid-cols-12 gap-4">
        <div class="col-span-7">
            <div class="h-full">
                <img src="{{ asset('/storage/' . $item->thumbnail) }}" alt="" class="w-full h-full object-cover">
            </div>
        </div>
        <div class="col-span-5">
            <div class="grid grid-flow-row grid-cols-12 gap-4">
                @forelse ($item->image as $image)
                    <div class="col-span-12 bg-gray-500 w-full h-full">
                        <img src="{{ asset('storage/' . $image->image) }}" alt="">
                    </div>
                @empty
                    <div class="col-span-12 bg-gray-500 w-full h-full">
                        <div class="bg-gray-500 w-full  h-44 flex flex-wrap content-center ">
                            <input type="file" class="bg-blue-500 mx-auto text-white px-3 py-1 rounded"
                                wire:model="photo1">
                            Pilih image
                            <div>
                                @error('photo1') <span class="error text-white font-bold">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 bg-gray-500 w-full h-full">
                        <div class="bg-gray-500 w-full  h-44 flex flex-wrap content-center ">
                            <input type="file" class="bg-blue-500 mx-auto text-white px-3 py-1 rounded"
                                wire:model="photo2">
                            Pilih image
                            <div>
                                @error('photo2') <span class="error text-white font-bold">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                @endforelse
                <div class="col-span-12">
                    <button wire:click="uploadImage({{ $item->id }})"
                        class="mx-auto bg-blue-600 text-white px-3 py-1 rounded">Simpa
                        Foto</button>
                </div>
            </div>
        </div>
    </div>
    <div class="text-lg font-semibold mt-2 ">{{ $item->title }}</div>
    <div class="mt-2">{!! $item->body !!} </div>
</div>

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire(e.detail);
        });
    </script>
@endpush
