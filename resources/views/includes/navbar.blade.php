<div class="md:px-20 px-2 z-40 container relative" id="menu">
    <nav class="bg-white px-4 py-2 md:flex justify-between">
        <div class="flex justify-between">
            <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-gray-800"
                href="/">
                <img src="{{ asset('gambar/logo.svg') }}" alt="">
            </a>
            <button
                class="text-black md:hidden cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button" v-on:click="toggleNavbar()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                    v-bind:class="{'hidden': showMenu, 'block': !showMenu}" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                    v-bind:class="{'hidden': !showMenu, 'block': showMenu}" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="md:flex block justify-center items-center" v-bind:class="{'hidden': !showMenu, 'block': showMenu}">
            <div
                class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-800 hover:opacity-75">
                <a href="/" class="text-sm uppercase font-bold">Home</a>
            </div>
            <div
                class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-800 hover:opacity-75">
                <a href="{{ route('about') }}" class="text-sm uppercase font-bold">About</a>
            </div>
            <div
                class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-800 hover:opacity-75">
                <a href="/artikel" class="text-sm uppercase font-bold">Artikel</a>
            </div>
            <div
                class="px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-gray-800 hover:opacity-75">
                <a href="{{ route('kontak-front') }}" class="text-sm uppercase font-bold">Kontak</a>
            </div>
        </div>

    </nav>
</div>
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script>
        var menu = new Vue({
            el: "#menu",
            data() {
                return {
                    showMenu: false
                }
            },
            mounted() {
                console.log("hello");
            },
            methods: {
                toggleNavbar: function() {
                    this.showMenu = !this.showMenu;
                }
            }
        })
    </script>
@endpush
