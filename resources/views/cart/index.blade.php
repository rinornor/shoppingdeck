<x-guest-layout>
    <x-shop-header />
    <div class="flex justify-around">
        <div>
    @if(session('cart'))
            @foreach($cartItems as $item)
    <div class="max-w-3xl bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 my-5">
    
        @if(isset($item['image']))
        <img class="rounded-t-lg" src="{{asset('images/products/'.$item['image'])}}" alt="" />
        @endif
    
        <div class="p-5">
    
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item['name']}}</h5>
            <span>&euro;{{$item['price']}}</span>

            @if($item['quantity'] > 1)
            <span>{{$item['quantity']}}</span>
            @endif
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 float-end">
                Remove from Cart
                
            </a>
        </div>
    </div>
    
@endforeach
@else
            <h1>No items in Cart</h1>
@endif
</div>

    <div class="sticky">
                <div class="checkout-title">
                    <h1>Summary</h1>
                </div>
                <div>
                    <p>Intermediate:</p>
                    <p>Delivery: 0$</p>
                </div>
                
                
                <div class="total">
                    
                    <p>Total: &euro;399.99</p>
                    
                
                    <x-button>Checkout</x-button>
    
                </div>
    </div>


</x-guest-layout>