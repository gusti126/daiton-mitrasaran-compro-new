<div>
    @section('title')
        User Management
    @endsection
    <div class="mb-4">
        <input type="text" placeholder="Cari User " class="border bg-gray-100 px-2 py-1 rounded" wire:model="keyword">
    </div>
    <div>
        <table class="table-auto border-separate border border-green-900 w-full">
            <thead>
                <tr class="text-center">
                    <th class="border border-green-600">Nama</th>
                    <th class="border border-green-600">Email</th>
                    <th class="border border-green-600">Level</th>
                    <th class="border border-green-600">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($users as $item)
                    <tr>
                        <td class="border border-green-600">{{ $item->name }}</td>
                        <td class="border border-green-600">{{ $item->email }}</td>
                        <td class="border border-green-600">{{ $item->role }}</td>
                        <td class="border border-green-600 flex justify-center">
                            {{-- delete --}}
                            <div class="___class_+?10___">
                                @if ($confirmId === $item->id)
                                    <div class="___class_+?15___">
                                        <button class="bg-red-700 px-2 py-1 mr-2 rounded text-white text-sm"
                                            wire:click="hapus">Yes</button>
                                        <button class="bg-blue-700 px-2 py-1 rounded text-white text-sm"
                                            wire:click="hapusNo">No</button>
                                    </div>
                                @else
                                    <div class="flex items-end">
                                        <div class="mt-4 bg-purple-700 px-2 py-1 my-auto rounded cursor-pointer text-white text-sm mr-3"
                                            wire:click="confirmDelet({{ $item->id }})">
                                            Setadmin
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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-2 text-center">
        <button class="bg-blue-600 rounded px-2 py-1 text-white text-sm" wire:click="loadMore">Load more</button>
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
