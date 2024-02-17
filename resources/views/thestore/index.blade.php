<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Store') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('products.create')}}">
        <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 my-3 mx-3">
            Add Product
            <span class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
            +
            </span>
        </button>
        </a>
        
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
               <div class="overflow-x-auto">
                
                <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">price</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">image</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($products as $product)
                        <tr>
                            
                                <td class="px-6 py-4 whitespace-nowrap"> <div  class="text-sm text-gray-900">{{ $product->name }} </div></td>
                                <td class="px-6 py-4 whitespace-nowrap"> <div  class="text-sm text-gray-900">{{ $product->price }} </div></td>
                                <td class="px-6 py-4 whitespace-nowrap"> <div  class="text-sm text-gray-900"><img src="{{ asset('images/products/'.$product->image)}}" alt="" width="70px">  </div></td>
                                <td class="px-6 py-4 whitespace-normal"> <div  class=" text-sm text-gray-900">{{ $product->description }} </div></td>
                                <td class="px-6 py-4 whitespace-nowrap"> <div  class="text-sm text-gray-900">{{ $product->quantity }} </div></td>
                                <td class="px-6 py-4 whitespace-nowrap"> <div  class="text-sm text-gray-900">{{ $product->category }} </div></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('products.edit', $product->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">
                                    Edit
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                                    
                                </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>