@extends('layout')

@section('title', 'Currency market')

@component('header')
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ route('currencies.index') }}">Currencies</a>
    </div>
    <div class="navbar-nav">
        @each('nav-item', $currencies, 'currency')
        <a class="nav-item nav-link active" href="{{ route('currencies.add') }}">Add</a>
    </div>
@endcomponent

@section('content-title', 'Currency market')

@section('content')
                @if (count($currencies) === 0)
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">No currencies</h4>
                </div>
                 @else
                    <ul class="list-unstyled">
                        @each('list-item', $currencies, 'currency')
                    </ul>
                @endif
@endsection