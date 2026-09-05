<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>

    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <a href="{{ route('products.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                    Add Product
                </a>
                <table class="w-full border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">#</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Description</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Price</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Stock</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Status</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Created At</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $product->id }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $product->name }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $product->description }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    ${{ number_format($product->price, 2) }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $product->stock }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    @if ($product->status)
                                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded">In Stock</span>
                                    @else
                                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded">Out of Stock</span>
                                    @endif
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $product->created_at->format('Y-m-d H:i:s') }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="text-blue-500 hover:text-blue-700">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700"
                                            onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
