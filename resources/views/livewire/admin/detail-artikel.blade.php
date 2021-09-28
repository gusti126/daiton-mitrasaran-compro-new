<div>

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
    <div class="bg-white">
        <div class="bg-white w-full p-2 mt-4">
            <div class="text-center">Komentar</div>
        </div>
        <div class="grid grid-flow-row grid-cols-12 gap-2 mt-4">
            @forelse ($item->komentar as $komen)
                <div class="col-span-12 bg-gray-100 rounded p-2  mx-2 mt-2 mb-1">
                    <div>{{ $komen->body }}</div>
                    <div class="px-4">
                        <div class="mt-2 text-sm">Balasan</div>
                        <hr class="mt-1">
                        @foreach ($komen->reply as $balasan)
                            <div class="bg-white p-2 rounded my-2 flex justify-between">
                                {{ $balasan->body }}
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 cursor-pointer"
                                        wire:click="deleteBalasan({{ $balasan->id }})" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </div>
                            </div>

                        @endforeach
                    </div>
                    @if ($komen->id === $komenId)
                        <div class="bg-white mt-2 mx-4">
                            <div class="">
                                <input type=" text"
                                class="rounded w-full text-sm py-1 border px-2" wire:keydown.enter="createBalasan"
                                placeholder="Balas komentar" wire:model="balasan">
                            </div>
                        </div>
                        <div class="mt-2 mx-4 cursor-pointer bg-yellow-500 px-2 py-1 rounded text-white inline-block text-sm"
                            wire:click="confirmBalasan({{ 0 }})">cancle</div>
                    @else
                        <div class="px-4">
                            <div class="mt-2 cursor-pointer bg-blue-700 px-2 py-1 rounded text-white inline-block text-sm"
                                wire:click="confirmBalasan({{ $komen->id }})">Balas</div>
                        </div>
                    @endif
                </div>
            @empty
                <div class="col-span-12 bg-white rounded p-4">
                    <div class="text-center">Tidak ada komentar</div>
                </div>
            @endforelse
        </div>
    </div>
</div>

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire(e.detail);
        });
    </script>
@endpush
