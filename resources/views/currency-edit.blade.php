@extends('currency')

@section('content')
    <div class="media-body">
    <form method="POST" action="{{ route('currencies.update', ['id'=>$currency['id']]) }}">
        @method('PUT')
        @include('currency-form'); 
    </form>
    </div>
@endsection