<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center items-center text-2xl font-bold py-2">Laravel CRUD Application with Roles
            </div>
            <div class="flex gap-2 justify-center items-center mt-4">
                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Here you can create
                        new product</h5>
                    <div class="flex justify-center items-center">
                        <a href="{{ route('add-product') }}" class="text-white bg-green-600 px-2 py-2 rounded-md">Add
                            Product</a>
                    </div>
                </div>
                @if (Auth::user()->isAdmin == '1')
                    <div
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Here you can
                            view all users and admin details</h5>
                        <div class="flex justify-center items-center">
                            <a href="{{ route('view-users') }}"
                                class=" text-white bg-green-600 px-10 py-2 rounded-md">View</a>
                        </div>
                    </div>
                @endif
                <div
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Here you can view
                        all product list</h5>
                    <div class="flex justify-center items-center">
                        <a href="{{ route('products-view') }}" class=" text-white bg-green-600 px-2 py-2 rounded-md">All
                            Product</a>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>
        </div>
</x-app-layout>
