<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>@yield('title')</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3W23CZTJKV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3W23CZTJKV');
    </script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>

<body>
    <div id="app">
        <div class="min-h-screen">
            @yield('content')
        </div>
        <div class="mt-20 px-20 py-8 border-t border md:block hidden">
            <div class=" md:flex justify-between">
                <div class="___class_+?3___">
                    <div class="font-bold text-2xl">DAITON <span class="text-blue-600 ">MITRA</span> SARANA</div>
                    <div class="text-gray-600">Mitra terbaik di Indonesia berdiri <br>
                        sejak 1994. Lebih dari 200+ mitra</div>
                </div>
                <div class="___class_+?7___">
                    <div class="font-bold text-lg mb-4 text-blue-600">For Beginners</div>
                    <div class="text-gray-600">Our Careers</div>
                    <div class="text-gray-600">Privacy</div>
                    <div class="text-gray-600">Terms & Conditions</div>
                </div>
                <div class="___class_+?12___">
                    <div class="font-bold text-lg mb-4 text-blue-600">Connect Us</div>
                    <div class="text-gray-600">support@daitonmitrasarana.co.id</div>
                    <div class="text-gray-600">021 - 2208 - 1996</div>
                </div>
                <div class="___class_+?16___">
                    <div class="font-bold text-lg mb-4 text-blue-600">Oprasional</div>
                    <div class="text-gray-600">Senin - Sabtu</div>
                    <div class="text-gray-600">08.00 - 17.00 wib</div>
                    <div class="text-gray-600">daiton mitra sarana, <br> Kemang, Jakarta</div>
                </div>
            </div>
        </div>
        <div class=" border-t text-center py-4 mt-20 md:mt-0">&copy Daiton Mitra Sarana 2021</div>
    </div>

    @stack('script')
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3W23CZTJKV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3W23CZTJKV');
    </script>
    @include('sweetalert::alert')
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Page Specific JS File -->
    @livewireScripts

</body>

</html>
