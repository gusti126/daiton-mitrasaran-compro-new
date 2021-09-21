<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />

    <title>@yield('title')</title>
    @include('includes.dashboard.header')
</head>

<body>
    <div id="app">
        @stack('modal')

        <div class="main-wrapper">
            @include('includes.dashboard.navbar')

            @include('includes.dashboard.sidebar')

            <!-- Main Content -->
            <div class="main-content min-h-screen">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('title')</h1>
                    </div>

                    <div class="section-body">
                        <div class="rounded ">
                            @yield('content')
                        </div>
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021
                </div>
                <div class="footer-right">Daiton Mitrasarana</div>
            </footer>
        </div>
    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-208064306-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-208064306-1');
    </script>


    @stack('test-aja-modal')
    @include('sweetalert::alert')
    @include('includes.dashboard.script-bottom')
    @stack('script')
    @livewireChartsScripts
</body>

</html>
