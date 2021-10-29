<x-layout>

    <x-breadcrumbs>
        <h3 class="shopp-grid-name text-4xl">Shop Grid Default</h3>
        <div class="page-list mt-2">
            <a href="#" class="text-base">Home.</a>
            <a href="#" class="text-base">Pages.</a>
            <a href="#" class="text-base">Shop Grid Default</a>
        </div>
    </x-breadcrumbs>


    <section class="grid-default-page mx-28">
        <x-searchResultShop></x-searchResultShop>
        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-14">
            @foreach($products as $product)
                <div class="m-auto">
                    <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                        <div class="m-auto">
                            <img src="{{ $product->imageUrl }}" class="w-36 h-36">
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <p class="product-title text-lg pb-2 pt-4">{{ $product->name }}</p>
                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                        <div class="price-form flex justify-center text-sm pt-3.5">
                            <p class="price pr-2.5">${{ $product->discountPrice }}</p>
                            <p class="discount-price">${{ $product->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <span>
            {{ $products->appends(['search' => request()->query('search') ])->links()}}
        </span>

        <x-imageFooter></x-imageFooter>

    </section>

</x-layout>
