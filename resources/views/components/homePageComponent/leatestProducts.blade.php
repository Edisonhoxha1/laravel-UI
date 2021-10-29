<div class="feauter-product-title text-center text-5xl mb-12">
    <h3>Leatest Products</h3>
</div>
<div class="price-form flex flex-col text-center md:flex-row lg:justify-center text-sm pt-3.5 mb-14">
    <a href="#" class="best-furniture pr:0 lg:pr-14 underline">New Arrival</a>
    <a href="#" class="pr:0 lg:pr-14">Best Seller</a>
    <a href="#" class="pr:0 lg:pr-14">Featured</a>
    <a href="#">Special Offer</a>
</div>

<div class="container grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-12 mb-20">
    @foreach($leatestProd as $product)
    <div>
        <div class="bg-gray-100 grid grid-cols-1 h-72">
            <div class="m-auto">
                <img src="{{ $product->imageUrl }}" class="w-52 h-52">
            </div>
        </div>
        <div class="product-info text-center flex justify-between mt-4">
            <p>{{ $product->name }}</p>
            <div class="flex justify-end">
                <p class="price pr-2.5">${{ $product->price }}</p>
                <p class="discount-price">${{ $product->discountPrice }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
