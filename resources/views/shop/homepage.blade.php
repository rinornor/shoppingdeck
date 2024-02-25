<x-guest-layout>
    <x-shop-header />
    <!-- Show here the products which we want to add to the cart -->

    <div class="flex justify-between">
    @foreach($products as $product)
<div class="w-48 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-5">
    
        <img class="rounded-t-lg" src="{{ asset('images/products/'.$product->image)}}" alt="" />
    
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$product->name}}</h5>
        </a>
        <span>{{$product->price}}&euro;</span>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$product->description}}</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <form action="{{ route('cart.store')}}" method="POST">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                    @csrf
                 <button type="submit">Add to Cart</button>
            </form>
            
        </a>
    </div>
</div>
@endforeach
</div>


    

</x-guest-layout>