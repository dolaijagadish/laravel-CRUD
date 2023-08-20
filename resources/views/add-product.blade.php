<x-app-layout>
    <x-slot name="header">
        @section('title','Add Product')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add New Product </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm ">
                <div class="p-2 text-gray-900">
                    <div>
                        <a href="{{ route('home') }}" class="px-2 py-2 bg-green-500 rounded-sm">Home</a>
                        <a href="{{ route('add-product') }}" class="px-2 py-2 bg-green-500 rounded-sm">Add New Product</a>
                        <a href="{{ route('view-users') }}" class="px-2 py-2 bg-green-500 rounded-sm">Vew all
                            Users/Admins</a>
                        <a href="{{ route('products-view') }}" class="px-2 py-2 bg-green-500 rounded-sm">View
                            Products</a>
                    </div>
                    <div class="max-w-7xl  text-center font-bold  p-2 text-xl text-yellow-700 ">
                        <h1 class="">Add New Product</h1>
                    </div>

                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="w-full flex justify-center items-center">
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label class="text-lg">Product Name</label>
                        <input class="w-[32rem] block " type="text" name="name" placeholder="Name">
                    </div>
                    <div class="my-4">
                        <label class="text-lg">Price</label>
                        <input class=" w-[32rem] block" type="number" name="price" placeholder="Price">
                    </div>
                    <div class="my-4">
                        <label class="text-lg">Description</label>
                        <input class=" w-[32rem] block" type="text" name="description" placeholder="Description ">
                    </div>
                    <div class="flex items-center justify-center">
                        <button class="bg-gradient-to-r from-green-400 to-green-500 hover:from-pink-500 hover:to-yellow-500 px-6 py-2 rounded-lg text-white">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
