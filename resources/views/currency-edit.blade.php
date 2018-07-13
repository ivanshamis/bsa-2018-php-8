@extends('currency')

@section('content')
    <div class="media-body">
    <form method="POST" action="{{ route('currencies.update', ['id'=>$currency['id']]) }}">
    @method('PUT')
    {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Currency title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter currency title" value="{{ $currency['title'] }}">
        </div>
        <div class="form-group">
            <label for="short_name">Short name</label>
            <input type="text" class="form-control" name="short_name" placeholder="Enter currency short name" value="{{ $currency['short_name'] }}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter currency price" value="{{ $currency['price'] }}">
        </div>
        <div class="form-group">
            <label for="logo_url">Price</label>
            <input type="text" class="form-control" name="logo_url" placeholder="Enter currency logo URL" value="{{ $currency['logo_url'] }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </div>
@endsection