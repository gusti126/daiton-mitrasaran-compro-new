@extends('layouts.front')
@section('content')
    <div>
    @section('title')
        {{ $item->title }}
    @endsection
    {{-- header --}}
    <div class="bg-gray-800 h-64">
        <div class="md:px-20 ">
            @include('includes.navbar')
        </div>

        <div class="md:mt-6 mt-2">
            <div class="text-gray-300 text-center text-sm ">Home <span>/</span> Detail artikel</div>

            <div class="text-center text-white text-lg font-semibold">{{ $item->title }}</div>
        </div>

    </div>
    {{-- endheader --}}
    {{-- image --}}
    @if ($isfullImgHeader)
        <div class="container md:px-20  -mt-20" id="app">
            <div class="grid grid-flow-row grid-cols-12 gap-2 md:gap-4">
                <div class="md:col-span-12">
                    <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="" class="w-full rounded">
                </div>
            </div>
        </div>
    @else
        <div class=" md:px-20  -mt-20" id="app">
            <div class="grid grid-flow-row grid-cols-12 gap-2 md:gap-4">
                <div class="md:col-span-7 col-span-12 ">
                    <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="" class="w-full rounded">
                </div>
                <div class=" col-span-12 md:col-span-5">
                    <div class="grid grid-flow-row grid-cols-12 gap-2 md:gap-4">
                        @foreach ($item->image as $image)
                            <div class="col-span-6 md:col-span-12">
                                <img src="{{ asset('storage/' . $image->image) }}" alt=""
                                    class="w-full rounded object-cover h-52 cursor-pointer border-2 border-transparent hover:border-gray-500">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    @endif
    {{-- endimage --}}

    {{-- deskripsi --}}
    <div class="md:px-20 px-4 mt-6">
        <div class="grid grid-flow-row grid-cols-12 gap-6">
            <div class="col-span-12 md:col-span-8">
                <div class="font-semibold mb-2 text-xl">{{ $item->title }}</div>
                <div>{!! $item->body !!} </div>
            </div>
            <div class="col-span-12 md:col-span-4  rounded ">
                <div class="grid grid-flow-row grid-cols-12 gap-4 border p-4">
                    <div class="col-span-12 ">
                        <div class="font-bold text-lg">{{ $byKategori->nama }}</div>
                    </div>
                    <div class="col-span-12 mb-2">
                        <hr>
                    </div>
                    @foreach ($byKategori->artikel as $item)
                        <div class="col-span-12 mb-2">
                            <a href="{{ route('detail-artikel', $item->slug) }}">
                                <div><img src="{{ asset('storage/' . $item->thumbnail) }}" alt=""
                                        class="w-full rounded-lg h-32 object-cover"></div>
                                <div class="font-semibold mt-2 text-lg text-gray-700">{{ $item->title }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- enddeskripsi --}}

    {{-- komentar --}}
    {{-- <div class="md:px-20 px-4 mt-6">
        <div class="font-semibold">Komentar</div>
        <div class="grid grid-flow-row grid-cols-12 bg-gray-200 px-2 md:p-4 mt-4">
            @forelse ($item->komentar as $k)
                <div class="col-span-1 mx-auto">
                    <img src="https://source.unsplash.com/random/100x100?sig={{ $k->id }}" alt="image"
                        class="rounded-full border border-white md:h-12">
                </div>
                <div class="ml-2 font-semibold col-span-11">{{ $k->nama }}
                    <div class="font-light text-sm">{{ $k->body }}
                    </div>
                </div>
            @empty
                <div class="text-gray-900 text-lg  col-span-12 text-center">Tidak ada komantar</div>
            @endforelse
        </div>
    </div> --}}
    {{-- endkomentar --}}

    {{-- new komentar --}}
    <div class="md:px-20 px-4 mt-6">
        <div class="grid grid-flow-row grid-cols-12 bg-gray-200 p-4 mt-4 gap-4">
            <div class="col-span-6">
                <div><input type="text" placeholder="Nama kamu" class="rounded w-full p-2" name="nama"
                        wire:model="komentar_nama"></div>
            </div>
            <div class="col-span-6">
                <div><input type="text" placeholder="Email kamu" class="rounded w-full p-2" name="email"
                        wire:model="komentar_email"></div>
            </div>
            <div class="col-span-12">
                <textarea name="body" rows="4" class="w-full rounded p-2" placeholder="masukan komentar"
                    wire:model="komentar_body"></textarea>
            </div>
            <div class="col-span-12">
                <button type="submit" class="bg-purple-600 px-4 py-2 rounded text-white"
                    wire:click="newKomentar({{ $item->id }})">Post
                    komentar</button>
            </div>
        </div>
    </div>
    {{-- endnew komentar --}}
</div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    window.addEventListener('swal', function(e) {
        Swal.fire(e.detail);
    });
</script>
@endpush
