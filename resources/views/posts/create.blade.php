@extends('layouts.app')

@section('title', 'Add Post')

@section('create-update')
    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col mx-auto items-center text-slate-950 mb-12 mt-0 ">
        @csrf
        <h1 class=" text-3xl text-white border-b">Add Post</h1>
        <div class="input my-5 flex flex-col gap-2">
            <label for="title" class="text-xl text-white">Title :</label>
            <input type="text" id="title" name="title"
                class="border-solid border-black border w-80 h-10 outline-none pl-3 rounded-lg">
        </div>

        <div class="input my-5 flex flex-col gap-2">
            <label for="description" class="text-white">Description :</label>
            <textarea name="description" id="description"
                class="border-solid border-black border resize-none w-96 h-auto outline-none pl-3 rounded-lg"></textarea>
        </div>

        <div class="input my-5">
            <label for="image" class="bg-blue-600 px-4 py-2 font-semibold cursor-pointer">Add Image</label>
            <input type="file" name="image" id="image" class="invisible">
        </div>
        <div class="buttons flex gap-4">
            <a href="{{ route('post.index') }}" class="bg-neutral-100 text-xl px-4 py-1 rounded-md">Back</a>
            <input type="submit" value="Send" class=" bg-neutral-100 text-xl px-4 py-1 rounded-md">
        </div>
    </form>
@endsection
