@extends('layouts.app')

@section('header')
    <x-navbar />
    <x-banner />
@endsection

@section('content')
<div id="wrapper">
    <x-content />
    <x-footer />
</div>
@endsection
