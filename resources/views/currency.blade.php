@extends('currencies')

@section('title'){{ $currency->title }}@endsection

@section('main-content')
    <h1>{{ $currency->title }}</h1>
    <img class="d-flex mr-3 img-fluid" src="{{ $currency['logo_url'] }}" alt="Generic placeholder image">
    <div class="media-body">
        {{ $currency['short_name'] }}
        ${{ $currency['price'] }}
        <br>
        <button onclick="location.href='{{ route('currencies.edit', 
            ['id' => $currency['id']]) }}'" type="button" class=".edit-button">Edit</button>
        <button onclick="location.href='{{ route('currencies.delete', 
            ['id' => $currency['id']]) }}'" type="button" class=".delete-button">Delete</button>
    </div>
@endsection