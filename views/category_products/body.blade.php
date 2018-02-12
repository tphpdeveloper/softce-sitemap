@foreach($products as $product)
<url>
    <loc>{{ route('product.view',[$product->slug]) }}</loc>
</url>
@endforeach