<div class="feauter-product-title text-center text-4xl mb-14">
    <h3>Top Categories</h3>
</div>
<div class="swiper mySwiper mb-28">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="container grid grid-cols-4 gap-12 mb-20">
                @foreach($topProduct as $product)
                <div>
                    <div class="bg-gray-100 grid grid-cols-1 h-64 rounded-full">
                        <div class="m-auto">
                            <img src="{{ $product->imageUrl }}" class="h-44">
                        </div>
                    </div>
                    <div class="price-italia flex justify-center pt-5 text-lg">
                        <a href="#" class="pr-1.5">Mini</a>
                        <a href="#" class="pr-1.5">LCW</a>
                        <a href="#">Chair</a>
                    </div>
                    <div class="price-italia">
                        <p class="text-base flex justify-center pt-3.5">{{$product->price}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="swiper-slide">
            <div class="container grid grid-cols-4 gap-12 mb-20">
            </div>
        </div>
        <div class="swiper-slide">Slide 3</div>
    </div>
    <div class="swiper-pagination"></div>
</div>
