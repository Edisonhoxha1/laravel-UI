<x-layout>

    <x-breadcrumbs>
        <div class="page-list mt-2">
            <a href="#" class="text-base">Home.</a>
            <a href="#" class="text-base">Pages.</a>
            <a href="#" class="text-base">Order Completed</a>
        </div>
    </x-breadcrumbs>

    <section class="grid-default-page mx-28">

        <div class="grid container grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-20">
            <div>
                <img src="image/time.png" class="m-auto">
            </div>
            <div class="align-center ">
                <img src="image/Vector.png" class="m-auto">
                <p class="text-center mt-5 mb-8">Your Order Is Completed!</p>
                <p class="text-center">Thank you for your order! Your order is being processed and will be completed within 3-6 hours. You will receive an email confirmation when your order is completed.</p>
                <div class="text-center mt-2.5">
                    <button type="button" class="add-cart m-auto text-basic text-center text-white px-6 py-3 mt-7">Continue Shopping</button>
                </div>
            </div>
            <div class="list-img">
                <img src="image/list.png" class="m-auto">
            </div>
        </div>

        <x-imageFooter/>
    </section>

</x-layout>


