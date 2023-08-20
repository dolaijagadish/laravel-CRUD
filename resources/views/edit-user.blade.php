<x-app-layout>
    <x-slot name="header">
        @section('title','Edit User')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden  ">
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
                        <h1 class="">Update User Details</h1>
                    </div>

                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="w-full flex justify-center items-center">
                <form action="{{ route('update-user') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <input type="text" name="id" value="{{ $user->id }}" hidden>
                        <label class="text-lg">Update Role</label>
                        <select class="block w-full mt-1 rounded-xl" name="isAdmin">
                            <option value="1" @selected($user->isAdmin == '1')>
                                Admin
                            </option>
                            <option value="0" @selected($user->isAdmin == '0')>
                                User
                            </option>
                        </select>
                        
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
