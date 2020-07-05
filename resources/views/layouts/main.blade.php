<!DOCTYPE html>
<html>
<head>

    @include('layouts.head')
    <title>@yield('title')</title>
    
    @section('css')
    @show

</head>

<body>

    @include('layouts.sidebar')

    <div class="main-content">
        @if(Request::segment(1) == 'profile')
            @include('layouts.header_profile')
        @else
            @include('layouts.header')
        @endif

        @yield('content')

    </div>

    @section('js')

    @include('layouts.scripts')

    @show

</body>

</html>
