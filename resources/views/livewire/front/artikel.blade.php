<div>
    @section('title')
        Artikel Daiton
    @endsection

    <div class=" bg-gray-700 pb-4 relative">
        <div class="absolute -top-28 -left-20 z-0">
            <img src="{{ asset('gambar/radial-background.svg') }}" alt="" class="___class_+?9___">
        </div>
        <div class="md:px-20">
            @include('includes.navbar')
        </div>
        <div class="mt-6 px-4 md:px-20 relative">
            <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 z-20">
                <div>
                    <img src="{{ asset('storage/' . $datahead->thumbnail) }}" alt="image"
                        class="w-96 mx-auto rounded-lg">
                </div>
                <div class="___class_+?4___">
                    <div class="text-white font-semibold text-xl">{{ $datahead->title }}</div>
                    <div class="text-gray-300 mt-2 text-sm">
                        {!! \Illuminate\Support\Str::limit($datahead->body, 450, $end = '...') !!}
                    </div>
                    <div class="mt-2 text-blue-400">Read more</div>

                </div>
            </div>

        </div>
    </div>
    <div class="bg-gray-100 px-4 md:px-20  md:py-4 pt-4 md:flex justify-between">
        <div class="hidden md:flex justify-between">
            @foreach ($kategoriAll as $item)
                <button class="mr-8 font-semibold underline cursor-pointer"
                    wire:click.prevent="byKategori({{ $item->id }})">
                    {{ $item->nama }}
                </button>
            @endforeach
        </div>
        <div>
            <input type="text" class="px-2 py-1 border border-gray-500 rounded-full" placeholder="cari artikel ... "
                wire:model="keyword">
        </div>
    </div>

    <div class="mt-6 px-4 md:px-20">
        <div class="grid grid-flow-row grid-cols-12 gap-6">
            @forelse ($artikel as $item)
                <div class="col-span-12 md:col-span-4">
                    <div>
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="" class="w-full rounded">
                    </div>
                    <div class="font-black text-blue-900 mt-2">
                        {{ $item->title }}
                    </div>
                    <div class="text-sm text-gray-700">
                        {!! \Illuminate\Support\Str::limit($datahead->body, 200, $end = '...') !!}
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('detail-artikel', $item->slug) }}"
                            class="bg-blue-900 text-white rounded px-3 py-1">Read</a>
                    </div>
                </div>
            @empty
                <div class="col-span-12 text-center font-semibold text-xl">
                    Data kosong
                </div>
            @endforelse
        </div>
        <div class="grid grid-flow-row grid-cols-12 gap-6">

            <div class="col-span-12 text-center py-2">
                <button
                    class="border-blue-800 border-2 px-3 py-1 rounded text-blue-800 hover:text-white hover:bg-blue-800 mx-auto"
                    wire:click="loadMore">Load
                    More</button>
            </div>
        </div>
    </div>
</div>
