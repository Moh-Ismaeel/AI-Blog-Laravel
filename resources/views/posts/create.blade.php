@extends('layouts.app')

@section('title', 'Add Post')

@section('logout')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit"
            class="font-semibold text-lg border border-white rounded-md px-2 hover:bg-white hover:text-slate-800">Logout</button>
    </form>
@endsection

@section('hero-content')
    {{-- Create Post Form --}}
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col mx-auto items-center text-slate-950 mb-12 mt-0 ">
        @csrf
        {{-- page-title --}}
        <h1 class=" text-3xl text-white border-b">Add Post</h1>
        {{-- title-post input --}}
        <div class="input my-5 flex flex-col gap-2">
            <label for="title" class="text-xl text-white">Title :</label>
            <input type="text" id="title" name="title"
                class="border-solid border-black border w-80 h-10 outline-none pl-3 rounded-lg">
        </div>
        {{-- category-post input (select) --}}
        <div class="category flex flex-col gap-2 text-white">
            <label for="category-select">Category :</label>
            <select name="category_id" id="category-select" class="bg-neutral-100 px-2 py-1 text-black ">
                @foreach ($categories as $category)
                    <div class="option">
                        <option id="category-{{ $category->id }}" value="{{ $category->id }}">{{ $category->title }}
                        </option>
                    </div>
                @endforeach
            </select>
        </div>
        {{-- tags-post input (select / multiple) --}}
        <div class="tag flex flex-col gap-2 text-white pt-5">
            <label for="tag-select">Tags :</label>
            <select name="tags_id[]" id="tag-select" class="bg-neutral-100 text-slate-900 px-2 py-1" multiple>
                @foreach ($tags as $tag)
                    <div class="option">
                        <option id="tag-{{ $tag->id }}" value="{{ $tag->id }}">{{ $tag->title }}
                        </option>
                    </div>
                @endforeach
            </select>
            <p class="note text-white"><u class="font-semibold">Note</u> : Hold Ctrl to select more than one
                tags</p>
        </div>
        {{-- description-post input (textArea) --}}
        <div class="input my-5 flex flex-col gap-2">
            <label for="description" class="text-white">Description :</label>
            <textarea name="description" id="description" placeholder="write something.."
                class="border-solid border-black border resize-none w-96 h-auto outline-none pl-3 rounded-lg"></textarea>
        </div>
        {{-- add-image-post button  --}}
        <div class="input my-5 flex gap-4 items-center flex-col">
            <label for="image"
                class="bg-blue-500 px-4 py-2 h-9 cursor-pointer font-semibold text-slate-100 border border-transparent hover:border-slate-50">Add
                Image</label>
            <input type="file" name="image" id="image" class="invisible">
        </div>
        {{-- buttons --}}
        <div class="buttons flex gap-4">
            <a href="{{ route('post.index') }}"
                class="bg-neutral-100 text-xl px-4 py-1 rounded-md cursor-pointer hover:underline">Back</a>
            <input type="submit" value="Send"
                class=" bg-neutral-100 text-xl px-4 py-1 rounded-md cursor-pointer hover:underline">
        </div>
    </form>
@endsection
