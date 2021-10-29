<div class="feauter-product-title text-center text-5xl mb-10">
    <h3>Trending Products</h3>
</div>

<div class="container grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-12 mb-20">
    @foreach($trendingProd as $product)
    <div class="w-auto h-80 shadow-xl">
        <div class="grid grid-cols-1">
            <div class="bg-gray-100 flex justify-center m-3">
                <div class="m-auto bg-gray-100">
                    <img src="{{ $product->imageUrl }}" class="w-48 h-48">
                </div>
            </div>
        </div>
        <div class="product-info text-center pb-3">
            <p class="support text-lg pb-2 pt-3.5">Cantilever chair</p>
            <div class="price-form text-sm pt-2 flex justify-center">
                <p class="pr-3">${{ $product->price }}</p>
                <p class="">${{ $product->discountPrice }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
