<div>
    @section('title')
        Management Pesan
    @endsection
    <div class="grid grid-flow-row grid-cols-12 gap-4">
        @forelse ($items as $item)
            <div class="col-span-4 ">
                <div class="bg-white rounded p-2">
                    <div class="font-semibold">
                        pesan dari {{ $item->nama }}
                    </div>
                    <div class="font-semibold">
                        email {{ $item->email }}
                    </div>
                    <div class="collapse p-2" id="collapseExample{{ $item->id }}">
                        {{ $item->body }}
                    </div>
                    <div class="
                        w-full mt-2">
                        <button class="bg-blue-600 px-2 py-1 rounded text-white text-sm ml-auto" data-toggle="collapse"
                            data-target="#collapseExample{{ $item->id }}" aria-expanded="false"
                            aria-controls="collapseExample{{ $item->id }}">Lihat
                            Pesan</button>
                    </div>
                </div>
            </div>
        @empty

        @endforelse
    </div>
</div>
