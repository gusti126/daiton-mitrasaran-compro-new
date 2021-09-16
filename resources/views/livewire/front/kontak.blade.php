<div>
    <div>
        @section('title')
            Daiton Mitrasarana
        @endsection

        {{-- header --}}
        <div class=" md:px-20 px-6 pb-10">
            <div class="md:px-8">
                @include('includes.navbar')
            </div>

        </div>
        {{-- endheader --}}
        <div class="grid grid-flow-row grid-cols-12 gap-4">
            <div class="md:col-span-6">
                <img src="{{ Storage::url($item->image) }}" alt="image kontak" class="mx-auto">
            </div>
            <div class="col-span-5 flex items-center">
                <div class="text-5xl font-bold text-blue-900">{{ $item->header_title }}
                    <div class="mt-2 text-gray-700 text-xl font-medium">
                        {{ $item->header_subtitle }}
                    </div>
                </div>

            </div>
        </div>
        <div class="grid grid-flow-row grid-cols-12 gap-4 md:px-20 px-4">
            <div class="md:col-span-4">
                <div class="shadow rounded p-4">
                    <img src="{{ Storage::url($item->ic_email) }}" class="w-20">
                    <div class="text-3xl font-semibold mt-2">
                        Kontak Melalui <br>
                        E-Mail
                    </div>
                    <div class="mt-4">
                        <a href="mailto:{{ $item->email }}"
                            class="px-4 py-2 rounded-full block text-center bg-blue-700 text-white">
                            Chat Sekarang
                        </a>
                    </div>
                </div>

            </div>
            <div class="md:col-span-4">
                <div class="shadow rounded p-4">
                    <img src="{{ Storage::url($item->ic_wa) }}" class="w-20">
                    <div class="text-3xl font-semibold mt-2">
                        Kontak Melalui <br>
                        WhatsApp
                    </div>
                    <div class="mt-4">
                        <a href="https://api.whatsapp.com/send/?phone={{ $item->wa }}&text=Halo+DaitonMitrasarana"
                            class="px-4 py-2 rounded-full block text-center bg-blue-700 text-white">
                            Chat Sekarang
                        </a>
                    </div>
                </div>

            </div>
            <div class="md:col-span-4">
                <div class="shadow rounded p-4">
                    <img src="{{ Storage::url($item->ic_telepon) }}" class="w-20">
                    <div class="text-3xl font-semibold mt-2">
                        Kontak Melalui <br>
                        Telepon
                    </div>
                    <div class="mt-4">
                        <a href="tel:{{ $item->telepon }}"
                            class="px-4 py-2 rounded-full block text-center bg-blue-700 text-white">
                            Chat Sekarang
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>
