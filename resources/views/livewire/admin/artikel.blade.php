<div class="bg-white p-4">
    @section('title')
        Artikel
    @endsection

    <div class="flex justify-between mb-6">
        <div class="___class_+?1___">
            <a href="{{ route('admin-livewire-artikel-create') }}"
                class="bg-blue-700 px-4 py-1 rounded flex text-white">
                Tambah
            </a>
        </div>
        <div class="___class_+?2___">
            <input type="text" class="border bg-gray-100 px-2 py-1 rounded" wire:model="keyword" placeholder="Cari ...">
        </div>
    </div>

    @forelse ($artikel as $item)
        <div class="flex items-stretch  mb-4  bg-white rounded mt-2">
            <img src="{{ asset('/storage/' . $item->thumbnail) }}" alt="" class="rounded h-20 mr-6">
            <div class="w-full">
                <div class="font-extrabold">{{ $item->title }}</div>
                <div class="text-gray-400 text-xs">{{ $item->created_at }}</div>
                <div class="flex justify-between items-end">
                    <div class="text-gray-400 flex self-end mt-5 text-xs">
                        <div class="mr-4">
                            <i class="far fa-eye"></i> <span>{{ number_format(30000) }}</span>
                        </div>
                        <div class="mr-4 cursor-pointer" wire:click="showKomentar({{ $item->id }})">
                            <i class="far fa-comments"></i>
                            <span>{{ number_format(App\Models\Komentar::where('artikel_id', $item->id)->count()) }}</span>
                        </div>
                    </div>
                    <div class="flex">

                        {{-- delete --}}
                        <div class="___class_+?10___">
                            @if ($confirmId === $item->id)
                                <div class="___class_+?15___">
                                    <button class="bg-red-700 px-2 py-1 rounded text-white text-sm"
                                        wire:click="hapus">Yes</button>
                                    <button class="bg-blue-700 px-2 py-1 rounded text-white text-sm"
                                        wire:click="hapusNo">No</button>
                                </div>
                            @else
                                <div class="flex items-end">
                                    {{-- info --}}
                                    <div class="bg-purple-500 px-2 py-1 my-auto rounded text-white text-sm mr-3">
                                        <a href="{{ route('livewire-detail-artikel', $item->slug) }}"
                                            class="___class_+?23___">Detail</a>
                                    </div>
                                    {{-- edit --}}
                                    <div class="bg-blue-700 px-2 py-1 my-auto rounded text-white text-sm mr-3">
                                        <a href="{{ route('livewire-edit-artikel', $item->slug) }}"
                                            class="___class_+?24___">Edit</a>
                                    </div>
                                    <div class="mt-4 bg-red-700 px-2 py-1 my-auto rounded cursor-pointer text-white text-sm mr-3"
                                        wire:click="confirmDelet({{ $item->id }})">
                                        Hapus
                                    </div>

                                    {{-- <div class="bg-red-700 px-2 py-1 rounded text-white text-sm"
                                        wire:click="confirmDelete({{ $item->id }})">Hapus</div> --}}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($artikelId === $item->id)
            @foreach ($item->komentar as $komen)
                <div class="md:px-10 pb-8">
                    <div class="font-bold">{{ $komen->nama }}</div>
                    <div>{{ $komen->body }}</div>
                    <div class="px-2">
                        <hr class="my-2">
                        @foreach ($komen->reply as $r)
                            <div class="mt-1">{{ $r->body }}</div>
                        @endforeach
                    </div>
                </div>

            @endforeach
        @endif
    @empty
        <div class="col-span-12 text-center font-semibold text-2xl">
            Tidak ada data
        </div>
    @endforelse



</div>

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire(e.detail);
        });
    </script>
@endpush
