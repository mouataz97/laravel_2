<h1>Products</h1>

@foreach($products as $product)
    <div>
        <h3>{{ $product['name'] }}</h3>
        <p>Price: {{ $product['price'] }} MAD</p>
    </div>
@endforeachs