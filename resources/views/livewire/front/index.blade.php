<div>
    @section('title')
        Daiton Mitrasarana
    @endsection

    {{-- header --}}
    <div
        class="bg-imgHead bg-cover bg-opacity-30 bg-black bg-blend-darken contrast-125 min-h-highHeader md:px-20 px-6 pb-10">
        <div class="md:px-8">
            @include('includes.navbar')
        </div>
        <div>
            <div class="text-white font-bold text-5xl text-center mt-12">DAITON <span class="text-blue-500">MITRA</span>
                SARANA</div>
            <div class="md:mt-12 mt-6 text-white text-center font-medium text-lg md:text-3xl">

                {!! $webmaster->header_subtitle !!}
            </div>
            <div class="text-center mt-6">
                <a href="#scrollspyHeading1"
                    class="bg-blue-500 text-white mx-auto px-4 py-2 rounded hover:bg-purple-500">Find Now</a>
            </div>
        </div>
    </div>
    {{-- endheader --}}

    {{-- statistik --}}
    {{-- dekstop view --}}
    <div class="-mt-16 z-10 container absolute hidden md:block" id="scrollspyHeading1">
        <div class=" grid grid-cols-1 gap-2 place-items-center">
            <div>
                <div class="bg-white p-6 rounded-lg mx-auto shadow-md md:flex">
                    <div class="flex">
                        <div class="md:mx-auto">
                            <div><img src="{{ asset('gambar/handshake 1.svg') }}" alt="" class="h-16 w-auto">
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="font-bold  text-xl">200+ Mitra</div>
                            <div class="text-gray-600 text-xs">
                                Bermitra lebih dari 200+ <br>
                                di seluruh Indonesia
                            </div>
                        </div>
                    </div>
                    <div class="flex md:ml-6">
                        <div class="mx-auto">
                            <div><img src="{{ asset('gambar/box 1.svg') }}" alt="" class="h-16 w-auto">
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="font-bold  text-xl">100+ Layanan</div>
                            <div class="text-gray-600 text-xs">
                                Melayani dengan sepenuh hati <br>
                                di seluruh Indonesia
                            </div>
                        </div>
                    </div>
                    <div class="flex md:ml-6">
                        <div class="md:mx-auto">
                            <div><img src="{{ asset('gambar/document 1.svg') }}" alt="" class="h-16 w-auto">
                            </div>
                        </div>
                        <div class="ml-4">
                            <div class="font-bold  text-xl">90+ Artikel</div>
                            <div class="text-gray-600 text-xs">
                                Artikel seputar produk <br>
                                untuk info para mitra
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- mobile view --}}
    <div class="md:hidden px-4 mt-4">
        <div class="bg-white p-6 rounded-lg mx-auto shadow-md md:flex border">
            <div class="flex">
                <div class="md:mx-auto">
                    <div><img src="{{ asset('gambar/handshake 1.svg') }}" alt="" class="h-16 w-auto">
                    </div>
                </div>
                <div class="ml-4">
                    <div class="font-bold  text-xl">200+ Mitra</div>
                    <div class="text-gray-600 text-xs">
                        Bermitra lebih dari 200+ <br>
                        di seluruh Indonesia
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg mx-auto shadow-md md:flex border mt-4">
            <div class="flex md:ml-6  md:mt-0">
                <div class="___class_+?39___">
                    <div><img src="{{ asset('gambar/box 1.svg') }}" alt="" class="h-16 w-auto">
                    </div>
                </div>
                <div class="ml-4">
                    <div class="font-bold  text-xl">100+ Layanan</div>
                    <div class="text-gray-600 text-xs">
                        Melayani dengan sepenuh hati <br>
                        di seluruh Indonesia
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg mx-auto shadow-md md:flex border mt-4">
            <div class="flex md:ml-6  md:mt-0">
                <div class="md:mx-auto">
                    <div><img src="{{ asset('gambar/document 1.svg') }}" alt="" class="h-16 w-auto">
                    </div>
                </div>
                <div class="ml-4">
                    <div class="font-bold  text-xl">90+ Artikel</div>
                    <div class="text-gray-600 text-xs">
                        Artikel seputar produk <br>
                        untuk info para mitra
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- endstatistik --}}

    {{-- artikel --}}
    <div class="md:px-20 px-4 md:mt-28 mt-12">
        <div class="grid grid-flow-row grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-3">
                <a href="{{ route('detail-artikel', $satu->slug) }}">
                    <div class="h-full relative">
                        <img src="{{ asset('storage/' . $satu->thumbnail) }}" alt=""
                            class="rounded-lg w-full h-32 md:h-full object-cover">
                        <div
                            class="absolute w-full rounded-lg bottom-0 px-2 pb-3 pt-8 font-semibold bg-gradient-to-t from-black to-transparent bg-bottom bg-opacity-50 text-white">
                            <div>{{ $satu->title }}</div>
                            <div class="font-medium text-gray-300 text-sm md:block hidden">Read More ...</div>
                        </div>
                        <div
                            class="absolute bg-blue-600 text-white px-2 py-1 top-0 right-0 rounded-tr-lg rounded-bl-lg">
                            artikel populer
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-span-12 md:col-span-9">
                <div class="grid grid-flow-row grid-cols-12 gap-4">
                    @foreach ($dua as $item)
                        <div class="col-span-6 ">
                            <a href="{{ route('detail-artikel', $item->slug) }}">
                                <div class="relative">
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" alt=""
                                        class="rounded-lg w-full h-44 object-cover">
                                    <div
                                        class="absolute bottom-0 px-2 pb-4 pt-8 font-semibold bg-gradient-to-t from-black to-transparent bg-bottom bg-opacity-50 text-white w-full rounded-lg md:text-base text-sm">
                                        <div>{{ $item->title }}</div>
                                        <div class="font-medium text-gray-300 text-sm md:block hidden">Read More ...
                                        </div>
                                    </div>
                                    <div
                                        class="absolute bg-blue-600 text-white px-2 py-1 top-0 right-0 rounded-tr-lg rounded-bl-lg">
                                        artikel populer
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="font-bold text-gray-700 mt-10 text-lg">{{ $byKategori->nama }}</div>
        <div class="grid grid-flow-row grid-cols-12 md:gap-8 gap-4 mt-8">
            @foreach ($byKategori->artikel as $item)
                <div class="col-span-12 md:col-span-4">
                    <div>
                        <div class="relative text-center">
                            <img src="{{ asset('storage/' . $item->thumbnail) }}" alt=""
                                class="rounded-lg h-96 w-full object-cover">
                            <div
                                class="absolute px-4 text-center items-center font-semibold rounded-lg text-white text-lg bottom-0 pt-10 pb-4 w-full  bg-gradient-to-t from-black to-transparent">
                                <div class="mb-3">
                                    {{ $item->title }}
                                </div>
                                <div>
                                    <a href="{{ route('detail-artikel', $item->slug) }}"
                                        class="bg-blue-600 px-2 py-2 rounded text-sm font-normal mt-2">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- endartikel --}}

    {{-- pesan --}}
    <form action="{{ route('create-pesan') }}" method="POST">
        @csrf
        <div class="md:px-20 px-4 mt-10">
            <div class="grid grid-flow-row grid-cols-12 gap-6">
                <div class="col-span-12 md:col-span-6 hidden md:block">
                    <div class="grid grid-flow-row grid-cols-12 gap-6">
                        <div class="col-span-6 ">
                            <div class="bg-blue-100 p-4 rounded-lg border">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div class="text-blue-600 font-bold text-2xl">Alamat</div>
                                <div class="text-gray-600 text-xs">
                                    {!! $webmaster->alamat !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 h-full">
                            <div class="bg-blue-100 p-4 rounded-lg border h-full">
                                {{-- telepon --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                                </svg>
                                <div class="text-blue-600 font-bold text-2xl">Hubungi kami</div>
                                <div class="text-gray-600 text-xs">
                                    {!! $webmaster->kontak !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 ">
                            <div class="bg-blue-100 p-4 rounded-lg border">
                                {{-- email --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div class="text-blue-600 font-bold text-2xl">Email</div>
                                <div class="text-gray-600 text-xs">
                                    {!! $webmaster->email !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 ">
                            <div class="bg-blue-100 p-4 rounded-lg border">
                                {{-- jam --}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div class="text-blue-600 font-bold text-2xl">Jam Kerja</div>
                                <div class="text-gray-600 text-xs">
                                    Senin - Sabtu <br>
                                    08.00 - 17.00 wib
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6  border p-6 bg-blue-400 rounded">
                    <div>
                        <input type="text" placeholder="Masukan Nama" name="nama"
                            class="rounded w-full border border-gray-400 py-2 bg-gray-100">
                    </div>
                    <div>
                        <input type="text" placeholder="Masukan Email" name="email"
                            class="mt-8 rounded w-full border border-gray-400 py-2 bg-gray-100">
                    </div>
                    <div>
                        <textarea type="text" placeholder="Masukan Pesan" name="body"
                            class="mt-8 rounded w-full border border-gray-400 py-2 text-gray-800 bg-gray-100 h-32"> </textarea>
                    </div>
                    <button type="submit"
                        class="bg-blue-600 mt-8 block w-full cursor-pointer hover:bg-purple-500 text-white py-2 rounded text-center">
                        Kirim Pesan
                    </button>
                </div>
            </div>
        </div>
    </form>
    {{-- pesan --}}

</div>
