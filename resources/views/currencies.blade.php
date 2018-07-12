@extends('layout')

@section('title', 'Currency market')

@section('content')
    @component('header')
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
        <div class="collapse navbar-collapse">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('currencies.index') }}">Currency market</a>
                    </li>
                    @each('nav-item', $currencies, 'currency')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('currencies.create') }}">Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endcomponent

    @component('content-wrapper')
        @section('main-content')
            <h1>Currency market</h1>
            @if (count($currencies) === 0)
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">No currencies</h4>
            </div>
            @else
                <ul class="list-unstyled">
                    @each('list-item', $currencies, 'currency')
                </ul>
            @endif
            @show
    @endcomponent
@endsection