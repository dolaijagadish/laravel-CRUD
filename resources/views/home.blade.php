<x-app-layout>
    <x-slot name="header">
        @section('title','Dashboard')
            
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class=" flex justify-center items-center text-3xl font-bold py-2 border border-green-700 rounded-lg">
                Laravel CRUD Application with Roles
            </div>
            <div class="flex justify-center gap-6 mt-4">
                <div
                    class="block max-w-sm p-6 bg-blue-400 border border-gray-200 rounded-lg shadow hover:bg-blue-600">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Here you can create
                        new product</h5>
                    <div class="flex justify-center items-center">
                        <a href="{{ route('add-product') }}" class="bg-gradient-to-r from-green-400 to-green-500 hover:from-pink-500 hover:to-yellow-500 px-6 py-2 rounded-lg text-white">Add
                            Product</a>
                    </div>
                </div>
                <div
                    class="block max-w-sm p-6 bg-blue-400 border border-gray-200 rounded-lg shadow hover:bg-blue-600">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Here you can view
                        all product list</h5>
                    <div class="flex justify-center items-center">
                        <a href="{{ route('products-view') }}" class="bg-gradient-to-r from-green-400 to-green-500 hover:from-pink-500 hover:to-yellow-500 px-6 py-2 rounded-lg text-white">All Products</a>
                    </div>
                </div>
                @if (Auth::user()->isAdmin == '1')
                    <div
                        class="block max-w-sm p-6 bg-blue-400 border border-gray-200 rounded-lg shadow hover:bg-blue-600">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Here you can
                            view all users and admin details</h5>
                        <div class="flex justify-center items-center">
                            <a href="{{ route('view-users') }}"
                                class=" bg-gradient-to-r from-green-400 to-green-500 hover:from-pink-500 hover:to-yellow-500 px-6 py-2 rounded-lg text-white">All Users</a>
                        </div>
                    </div>
                @endif
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            </div>
        </div>
</x-app-layout>
