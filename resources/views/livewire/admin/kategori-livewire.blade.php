<div>
    @section('title')
        Management Kategori Artikel
    @endsection
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (!$isCreate)
        <div class="bg-blue-600 rounded px-4 py-2 inline-block text-white mb-4 cursor-pointer" wire:click="create">Tambah
            Kategori</div>


    @else
        <form wire:submit.prevent="store">
            <div>

                <input type="text" wire:model="nama">
                <div class="mt-2">
                    <button type="submit"
                        class="border-2 border-blue-600 bg-blue-600 rounded px-4 py-2 inline-block text-white mb-4 cursor-pointer">Submit</button>
                    <button
                        class="border-2 border-blue-600 text-blue-600 rounded px-4 py-2 inline-block hover:text-white mb-4 cursor-pointer hover:bg-blue-600"
                        wire:click="cancleCreate">Cancle</button>
                </div>
            </div>
        </form>
    @endif
    <div class="grid grid-flow-row grid-cols-12 gap-4">
        @foreach ($items as $item)
            <div class="col-span-3">
                <div class="bg-white shadow-sm rounded p-2">
                    @if ($updateId === $item->id)
                        <input type="text" wire:model="nama" class="rounded py-0 text-sm">
                        <div class="flex mt-2">
                            <div class="rounded px-1 py-1 bg-blue-600 text-white cursor-pointer text-xs"
                                wire:click="update">
                                update</div>
                            <div class="rounded px-1 py-1 bg-red-600 ml-3 text-white cursor-pointer text-xs"
                                wire:click="confirmUpdate({{ $item->id }})">cancle</div>
                        </div>
                    @else
                        {{ $item->nama }}
                    @endif

                    @if ($deletId !== $item->id && $updateId !== $item->id)
                        <div class=" flex ml-auto mt-2">
                            <i class="far fa-edit text-purple-600 cursor-pointer"
                                wire:click="confirmUpdate({{ $item->id }})"></i>
                            <i class="far fa-trash-alt text-red-500 ml-3 cursor-pointer"
                                wire:click="confirmDelete({{ $item->id }})"></i>
                        </div>

                    @endif
                    @if ($deletId === $item->id)
                        <div class=" flex ml-auto mt-2">
                            <span class="bg-red-600 px-1 py-1 rounded cursor-pointer text-white text-xs  "
                                wire:click="hapus">Yes</span> <span
                                class="bg-blue-600 px-1 py-1 rounded cursor-pointer text-white text-xs ml-3"
                                wire:click="confirmDelete({{ $item->id }})">No</span>
                        </div>
                    @endif

                </div>
            </div>
        @endforeach
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
