@extends('currencies')

@section('title'){{ $currency->title }}@endsection

@section('main-content')
    <h1>{{ $currency->title }}</h1>
    <p>This is my currency  {{ $currency->title }} content.</p>
@endsection