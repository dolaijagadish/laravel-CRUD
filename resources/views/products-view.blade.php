<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 text-gray-900">
                    <div>
                        <a href="{{ route('home') }}" class="px-2 py-2 bg-green-500 rounded-sm">Home</a>
                        <a href="{{ route('add-product') }}" class="px-2 py-2 bg-green-500 rounded-sm">Add New Product</a>
                        @if (Auth::user()->isAdmin == '1')
                            <a href="{{ route('view-users') }}" class="px-2 py-2 bg-green-500 rounded-sm">Vew all
                                Users/Admins</a>
                        @endif
                        <a href="{{ route('products-view') }}" class="px-2 py-2 bg-green-500 rounded-sm">View
                            Products</a>
                    </div>
                    <div class="w-full flex items-center justify-center pt-2">
                        <table class="w-full mt-2">
                            <th class="bg-slate-400 px-3">SnNo</th>
                            <th class="bg-slate-400 px-3">Name</th>
                            <th class="bg-slate-400 px-3">Price</th>
                            <th class="bg-slate-400 px-3">Description</th>
                            @if (Auth::user()->isAdmin == '1')
                                <th class="bg-slate-400 px-3">
                                    Action
                                </th>
                            @endif
                            @foreach ($products as $products)
                                <tr class=" w-[60px] text-blue-600	bg-slate-200">
                                    <td>
                                        <div class="flex justify-center">
                                            {{ $products->id }}
                                        </div>
                                    </td>

                                    <td class="p-2">
                                        <div class="flex justify-center">
                                            {{ $products->name }}
                                        </div>
                                    </td>
                                    <td class="p-2">
                                        <div class="flex justify-center text-violet-900">
                                            <span class="mr-1">&#8377;</span> {{ $products->price }}
                                        </div>
                                    </td>
                                    <td class="p-2">
                                        <div class="flex justify-center  ">
                                            {{ $products->description }}
                                        </div>
                                    </td>
                                    @if (Auth::user()->isAdmin == '1')
                                        <td>
                                            <div class="flex py-1 justify-center gap-2">
                                                <a href="{{ Route('edit', $products->id) }}"
                                                    class="px-2 py-2 bg-yellow-400 rounded-sm text-blue-900">Edit</a>
                                                <a href="{{ Route('delete-user', $products->id) }}"
                                                    class="px-2 py-2 bg-red-600 rounded-sm text-white">Delete</a>
                                            </div>
                                        </td>
                                    @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
