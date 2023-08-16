<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Users
        </h2>
    </x-slot>
    {{-- @dd($users); --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg">
                <div class="p-2 text-gray-900">
                    <div>
                        <a href="{{ route('home') }}" class="px-2 py-2 bg-green-500 rounded-sm">Home</a>
                        <a href="{{ route('add-product') }}" class="px-2 py-2 bg-green-500 rounded-sm">Add New Product</a>
                        <a href="{{ route('view-users') }}" class="px-2 py-2 bg-green-500 rounded-sm">Vew all
                            Users/Admins</a>
                        <a href="{{ route('products-view') }}" class="px-2 py-2 bg-green-500 rounded-sm">View
                            Products</a>
                    </div>
                    <div class="pt-2 w-full flex items-center justify-center">
                        <table class="w-full mt-2">

                            <th class="bg-slate-400 px-3">Id</th>
                            <th class="bg-slate-400 px-3">Name</th>
                            <th class="bg-slate-400 px-3">Email</th>
                            <th class="bg-slate-400 px-3">Usertype</th>
                            <th class="bg-slate-400 px-3">Action</th>
                            @foreach ($users as $user)
                                <tr class=" w-[60px] text-blue-600	bg-slate-200">
                                    <td class="p-2">
                                        <div class="flex justify-center">
                                            {{ $user->id }}
                                        </div>
                                    </td>
                                    <td class="p-2">
                                        <div class="flex justify-center">
                                            {{ $user->name }}
                                        </div>
                                    </td>
                                    <td class="p-2">
                                        <div class="flex justify-center  ">
                                            {{ $user->email }}
                                        </div>
                                    </td>
                                    <td class="p-2">
                                        <div class="flex justify-center  ">
                                            @if ($user->isAdmin == '1')
                                                Admin
                                            @else
                                                User
                                            @endif
                                        </div>

                                    <td>
                                        <div class="flex py-1 justify-center gap-2">
                                            @if ($user->id != Auth::user()->id)
                                                <a href="{{ Route('delete-user', $user->id) }}"
                                                    class="px-2 py-2 bg-red-600 rounded-sm text-white">Delete</a>
                                            @endif
                                        </div>
                                    </td>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
