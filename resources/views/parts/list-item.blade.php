<li class="media my-4">
    <img class="d-flex mr-3 img-fluid" src="{{ $currency['logo_url'] }}">
    <div class="media-body">
        <h5 class="mt-0 mb-1">
            <a href="{{ route('currencies.show', ['id' => $currency['id']]) }}">{{ $currency['title'] }}</a>
        </h5>
        {{ $currency['short_name'] }}
        ${{ $currency['price'] }}
        <br>
        <button onclick="location.href='{{ route('currencies.edit', 
            ['id' => $currency['id']]) }}'" type="button" class=".edit-button">Edit</button>
        <button onclick="location.href='{{ route('currencies.delete', 
            ['id' => $currency['id']]) }}'" type="button" class=".delete-button">Delete</button>
    </div>
</li>