<!DOCTYPE html>
<html>
<head>

    @include('layouts.head')

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
