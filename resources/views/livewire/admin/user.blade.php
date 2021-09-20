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
                    <td>
                        @if ($confirmId === $item->id)

                            <button type="submit" class="bg-red-700 text-white px-2 py-1 rounded" data-toggle="modal"
                                id="testModal" wire:click="hapus({{ $item->id }})">ya</button>
                            <button type="submit" class="bg-blue-700 text-white px-2 py-1 rounded" data-toggle="modal"
                                id="testModal" wire:click="hapusNo({{ $item->id }})">no</button>

                        @else
                            <button type="submit" class="bg-blue-700 text-white px-2 py-1 rounded" data-toggle="modal"
                                id="testModal" wire:click="setAdmin({{ $item->id }})">set admin</button>
                            {{--  --}}
                            <button type="submit" class="bg-red-700 text-white px-2 py-1 rounded" data-toggle="modal"
                                id="testModal" wire:click="confirmDelet({{ $item->id }})">hapus</button>
                        @endif
                    </td>

                </tr>

            @endforeach

        </table>

        <div class="mt-2 text-center">
            <button class="bg-blue-600 rounded px-2 py-1 text-white text-sm" wire:click="loadMore">Load more</button>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    @if (isset($userModal['name']))
                        <h5 class="modal-title" id="exampleModalLabel">{{ $userModal['name'] }}</h5>
                    @else
                        -
                    @endif
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas et, nobis reiciendis non
                    excepturi fugit deserunt sapiente dignissimos vero placeat cupiditate eum delectus numquam illo, aut
                    error voluptates commodi similique.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>


@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire(e.detail);
        });

        window.addEventListener('modalShow', function(e) {
            console.log(e);
            $('#testModal').fireModal({
                title: 'My Modal',
                body: 'Hello, dude!',
                buttons: [{
                    text: 'Close dulu',
                    class: 'btn btn-secondary',
                    handler: function(current_modal) {
                        $.destroyModal(current_modal);
                    }
                }]
            });
        })
    </script>
@endpush
