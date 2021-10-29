<div class="feauter-product-title text-center text-5xl mb-12">
    <h3>Feature Products</h3>
</div>

<div class="container grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-12 mb-20">
@foreach($featuredProd as $prod)
    <div class="w-auto h-auto shadow-xl">
        <div class="bg-gray-100 grid grid-cols-1 h-72">
            <div class="m-auto">
                <img src="{{ $prod->imageUrl }}" class="w-44 h-44">
            </div>
        </div>
        <div class="product-info text-center pb-3">
            <p class="product-title-homepage text-lg pb-2 pt-4"></p>
            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
            <div class="price-form text-sm pt-3.5">
                <p class="pb-2.5">{{ $prod->code }}</p>
                <p class="">${{ $prod->price }}</p>
            </div>
        </div>
    </div>
@endforeach
</div>
