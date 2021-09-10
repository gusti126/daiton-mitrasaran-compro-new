<div>
    @section('title')
        User Management
    @endsection

    <div class="bg-white p-4 rounded">
        <div class="mb-4">
            <input type="text" placeholder="Cari User " class="border bg-gray-100 px-2 py-1 rounded"
                wire:model="keyword">
        </div>
        <table class="table table-bordered table-md">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Action</th>
            </tr>

            @php
                $no = 1;
            @endphp
            @foreach ($users as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <div class="badge badge-success">{{ $item->role }}</div>
                    </td>
                    <td><button type="submit" class="bg-blue-700 text-white px-2 py-1 rounded" data-toggle="modal"
                            data-target="#exampleModal{{ $item->id }}">Detail</button></td>
                </tr>
                @section('test-aja-modal')
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{ $item->name }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
            @endforeach

        </table>

        <div class="mt-2 text-center">
            <button class="bg-blue-600 rounded px-2 py-1 text-white text-sm" wire:click="loadMore">Load more</button>
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
