@extends('layouts.app')

@section('title', 'Edit Post')

@section('create-update')
    <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data"
        class="flex flex-col items-center mb-16">
        @csrf
        @method('PUT')
        <div class="input my-5 flex flex-col gap-2">
            <label for="title" class="text-white">Title :</label>
            <input type="text" id="title" name="title"
                class="border-solid border-black border w-80 h-10 outline-none pl-3 rounded-lg text-slate-950"
                value="{{ $post->title }}">
        </div>

        <div class="input my-5 flex flex-col gap-2">
            <label for="description" class="text-white">Description :</label>
            <textarea name="description" id="description"
                class="border-solid border-black border resize-none w-96 h-52 outline-none pl-3 rounded-lg text-slate-950">{{ $post->description }}</textarea>
        </div>

        <div class="input my-5 flex gap-4 items-center flex-col">
            <div class="image-current">
                <p class="text-white">Current Image: </p>
                <img src="/images/{{ $post->image }}" alt="" class=" w-96 my-7">
            </div>
            <label for="image" class="bg-blue-400 px-4 py-2 h-9 cursor-pointer">Add Image</label>
            <input type="file" name="image" id="image" class="invisible">
        </div>
        <div class="buttons flex gap-4 text-slate-800">
            <a href="{{ route('post.index') }}" class="bg-neutral-100 text-xl px-4 py-1 rounded-md">Back</a>
            <input type="submit" value="Edit" class="bg-neutral-100 text-xl px-4 py-1 rounded-md">
        </div>
    </form>
@endsection
