<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>@yield('title')</title>
</head>
@include('includes.dashboard.header')

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
                    Copyright &copy; 2018
                    <div class="bullet"></div>
                    Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
                </div>
                <div class="footer-right">2.3.0</div>
            </footer>
        </div>
    </div>
    @yield('test-aja-modal')
    @stack('script')
    @include('sweetalert::alert')
    @include('includes.dashboard.script-bottom')
</body>

</html>
