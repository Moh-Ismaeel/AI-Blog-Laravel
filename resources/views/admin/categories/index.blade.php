@extends('layouts.app')

@section('title', 'Categories')

@section('logout')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit"
            class="font-semibold text-lg border border-white rounded-md px-2 hover:bg-white hover:text-slate-800">Logout</button>
    </form>
@endsection

@section('hero-content')
    <h1 class="font-semibold text-2xl pb-3">All Categories</h1>
    <a href="{{ route('admin.categories.create') }}"
        class="bg-sky-700 px-4 py-2 text-white rounded-lg border border-transparent hover:border-slate-50">Add New Category
        +</a>
    <div class="manage-categories flex justify-center items-center mt-10">
        <table class="w-6/12 text-left border border-solid border-white">
            <thead class="border border-solid border-white">
                <th class="border border-solid border-white pl-2 ">Id</th>
                <th class="border border-solid border-white pl-2">Image</th>
                <th class="border border-solid border-white pl-2">Title</th>
                <th class="border border-solid border-white pl-2">Actions</th>
            </thead>
            <tbody class="border border-solid border-white">
                @forelse ($categories as $category)
                    <tr class="border border-solid border-white">
                        <td class="border border-solid border-white pl-2 py-3">{{ $category->id }}</td>
                        <td class="border border-solid border-white pl-2 py-3"> <img
                                src="./../images/{{ $category->image }}" alt="Category Image" class="w-24 rounded-full">
                        </td>
                        <td class="border border-solid border-white pl-2 py-3">{{ $category->title }}</td>
                        <td class=" border-white pl-2 py-3 flex gap-x-6 items-center justify-center">
                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                                class="bg-sky-600 px-6 py-2 rounded-sm border border-transparent hover:border hover:border-neutral-50">Edit
                                <i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('admin.categories.delete', $category->id) }}" method="POST"
                                class="bg-red-700 px-4 py-2 rounded-sm cursor-pointer border border-transparent hover:border hover:border-neutral-50">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="cursor-pointer">
                                <i class="fa-solid fa-trash"></i>
                            </form>
                        </td>
                    </tr>
                    {{-- message if no categories --}}
                @empty
                    <p class="text-white text-xl">No Categories</p>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
