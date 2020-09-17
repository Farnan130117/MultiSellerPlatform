<html>
    <head>
        <title>MSP - @yield('title')</title>

        @include('layouts.header.header') <!-- Header -->

    </head>
    <body>
        <!--
        @section('sidebar')
            This is the master sidebar.
        @show
        -->

         @include('layouts.navbar.navbar') <!-- Navbar -->

         {{--  @include('layouts.slider.slider') --}}  <!-- Slider currently comment out-->

        <div class="container">
            @yield('slider')
            @yield('content')
        </div>
        @include('layouts.footer.footer') <!-- Footer -->
    </body>
</html>