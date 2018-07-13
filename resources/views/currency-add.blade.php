@extends('currencies')

@section('title', 'Add new currency')

@section('content-title', 'Add new currency')

@section('content')
    <div class="media-body">
    <form method="POST" action="{{ route('currencies.store') }}">
        @include('currency-form');        
    </form>
    </div>
@endsection