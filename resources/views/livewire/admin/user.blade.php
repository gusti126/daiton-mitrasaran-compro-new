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
                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                </tr>
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
