<x-layout>

    <x-breadcrumbs>
        <h3 class="shopp-grid-name text-4xl">Shop List</h3>
        <div class="page-list mt-2">
            <a href="#" class="text-base">Home.</a>
            <a href="#" class="text-base">Pages.</a>
            <a href="#" class="text-base">ShopList</a>
        </div>
    </x-breadcrumbs>

    <section class="grid-default-page mx-28">
        <x-searchResultShop></x-searchResultShop>
        <div class="mb-20">
            @foreach($products as $product)
                <div class="flex flex-col md:flex-row lg:justify-start mb-12">
                    <div class="grid grid-cols-1">
                        <div class="m-auto">
                            <img src="{{ $product->imageUrl }}" class="w-80 h-52">
                        </div>
                    </div>
                    <div class="product-info text-center md:text-left lg:text-left">
                        <p class="product-title text-2xl pb-2 pt-4 ml:0 md:ml-8 lg:ml-8">{{ $product->name }}</p>
                        <div class="price-form flex justify-center md:justify-start lg:justify-start text-sm pt-3.5 ml:0 md:ml-8 lg:ml-8 pb-2.5">
                            <p class="price pr-2.5">${{ $product->discountPrice }}</p>
                            <p class="discount-price pr-2.5">${{ $product->price }}</p>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <p class="ml:0 md:ml-8 lg:ml-8 leading-8 w-auto lg:w-96">{{ $product->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <span class="text-center mb-1.5">
            {{ $products->appends(['search' => request()->query('search') ], ['perPage' => request()->input('perPage') ])->links()}}
        </span>

        <x-imageFooter></x-imageFooter>

    </section>

</x-layout>



