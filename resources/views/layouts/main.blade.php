<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    <title>@yield('title')</title>

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('dashkit/src/assets/fonts/feather/feather.css')}}" />
    <link rel="stylesheet" href="{{ asset('dashkit/node_modules/flatpickr/dist/flatpickr.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('dashkit/node_modules/quill/dist/quill.core.css')}}" />
    <link rel="stylesheet" href="{{ asset('dashkit/node_modules/highlightjs/styles/vs2015.css')}}" />

    <!-- Map -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('dashkit/src/assets/css/theme.css')}}" id="stylesheetLight" />

    @section('css')
    @show

</head>

<body>

    @include('layouts.sidebar')

    <div class="main-content">
        @include('layouts.header')

        @yield('content')

    </div>

    @section('js')

    @include('layouts.scripts')

    @show

</body>

</html>
