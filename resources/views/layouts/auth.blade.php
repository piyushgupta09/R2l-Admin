@extends('layouts.master')

@section('head')

<!-- Styles -->
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">

<!-- Scripts -->
<script src="{{ asset('js/auth.js') }}" defer></script>

@endsection

@section('body')
<body>
    @yield('content')
</body>
@endsection
