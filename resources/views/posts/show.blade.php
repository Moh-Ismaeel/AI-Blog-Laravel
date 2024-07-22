@extends('layouts.app')

@section('title', 'Show Post')

@section('logout')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit"
            class="font-semibold text-lg border border-white rounded-md px-2 hover:bg-white hover:text-slate-800">Logout</button>
    </form>
@endsection

@section('read-update')

    <div class="show-card max-w-4xl flex justify-between gap-14 text-slate-950 mx-auto my-14">
        {{-- post-image --}}
        <img src="/images/{{ $post->image }}" alt="" class=" max-w-96 ">
        {{-- post-content --}}
        <div class="content">
            <div class="user-info flex gap-x-2 mb-3 items-center bg-slate-50 max-w-72 py-1 px-3 rounded-lg">
                <img src="/images/{{ $post->user->image }}" alt="no image"
                    class="w-12 h-12 border border-sky-800 rounded-full bg-slate-400 text-sm text-slate-950 font-semibold">
                <p class="text-gray-700 font-bold pl-2 text-lg">
                    @if (Auth::user()->id == $post->user->id)
                        You
                    @else
                        {{ $post->user->name }}
                    @endif
                </p>
            </div>

            <div class="category text-left">
                <p class="text-base text-gray-300 -mb-1 cursor-default" title="category">{{ $category->title }}</p>
            </div>
            <h1 class="main-title text-3xl text-left capitalize">{{ $post->title }}</h1>
            <div class="tags text-left overflow-auto max-w-96 text-wrap">
                <p class="mt-2">
                    @foreach ($tags as $tag)
                        <span
                            class="inline-block bg-gray-100 bg-opacity-75 text-black font-semibold text-sm px-3 py-1 rounded-md ">#{{ $tag }}</span>
                    @endforeach
                </p>
            </div>
            <p class="text-white mt-5 text-left min-w-96">{{ $post->description }}</p>
            <div class="buttons flex gap-4 my-8">
                <a href="{{ route('post.index') }}"
                    class="bg-neutral-100 text-xl px-4 py-1 rounded-md hover:underline">Back</a>
                @if (auth()->check() && auth()->user()->can('update', $post))
                    <a href="{{ route('post.edit', $post->id) }}"
                        class="bg-neutral-100 text-xl px-4 py-1 rounded-md hover:underline">Edit</a>
                @endif
            </div>
        </div>
    </div>

    <div class="comments bg-neutral-200 overflow-y-auto w-2/3 mx-auto px-5 py-4 rounded-lg flex flex-col gap-5">
        {{-- comments-section title --}}
        <h1 class="text-left text-2xl text-sky-800 mb-2">Comments</h1>
        {{-- add-comment form --}}
        <form action="{{ route('comments.store', $post->id) }}" method="POST"
            class="text-slate-950 text-left flex bg-slate-600 px-2 py-4 w-full ">
            @csrf
            {{-- comment-input (textArea) --}}
            <textarea type="text" name="comment" id="comment"
                class="w-full  px-4 resize-none  leading-6 outline-none rounded-lg" {{-- rounded-full --}}
                placeholder="Comment by {{ Auth::user()->name }}.. "></textarea>
            {{-- submit(send comment) button --}}
            <button type="submit"
                class="send-comment text-2xl ml-2 text-neutral-200 px-4 hover:bg-neutral-100 rounded-full hover:text-slate-800 border border-neutral-400"><i
                    class="fa-regular fa-paper-plane"></i></button>
        </form>

        {{-- All comments of this post --}}
        @foreach ($post->comments as $comment)
            {{-- comment actions (delete or update)     --}}
            <div class="comment relative bg-gray-300 text-slate-950 py-2 px-3 rounded-md">
                @can('delete', $comment)
                    <form action="{{ route('comments.delete', $comment->id) }}" method="POST"
                        onsubmit="return confirm('Are you sure tou want to delete this comment ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="absolute right-16 top-1 text-gray-600 hover:text-red-400 hover:font-semibold">delete
                            <i class="fa-solid fa-trash"></i> |
                        </button>

                    </form>
                @endcan
                @can('update', $comment)
                    <a href="{{ route('comments.edit', $comment->id) }}"
                        class="absolute right-2 top-1 text-gray-600 hover:text-sky-500 hover:font-semibold">edit
                        <i class="fa-solid fa-pen-to-square"></i></a>
                    </a>
                @endcan
                {{-- comment->user-info (image + name) --}}
                <div class="user flex justify-start gap-2 items-center">
                    <img src="/images/{{ $comment->user->image }}" alt="no Image"
                        class="w-12 h-12 rounded-full bg-slate-400 text-sm text-slate-950">
                    <span>{{ $comment->user->name }}</span>
                    {{-- <p>{{ $comment->created_at }}</p> --}}
                </div>
                {{-- comment --}}
                <div class="content text-left mt-2"> {{ $comment->comment }}</div>
            </div>
        @endforeach
    </div>
@endsection
