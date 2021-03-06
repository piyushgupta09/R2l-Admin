@extends('layouts.master')

@section('head')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@endsection

@section('body')
<body class="frontpage slicedpage transition-go-inside">

    <!-- Content -->
    <div id="app">
        <div id="header">
            @yield('header')
        </div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
@endsection
