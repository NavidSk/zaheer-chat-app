<h1>Products</h1>

<hr>
@foreach($products as $product)
    <h2>ID: {{ $product['id'] }}</h2>
    <h2>Name: {{ $product['name'] }}</h2>
    <h3>Price: {{ $product['price'] }}</h3>
    <a href="/products/{{ $product['id'] }}">
        View {{ $product['name'] }}
    </a> <br />
    <a href="/products/{{ $product['id'] }}/delete">
        Delete {{ $product['name'] }}
    </a>
    <hr>
@endforeach
