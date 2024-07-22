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
    {{-- Edit Comment --}}
    <div class="edit flex flex-col mx-auto items-center text-slate-950 mb-12 mt-0 ">
        {{-- page-title --}}
        <h1 class="text-4xl text-white font-semibold mb-10">Edit Comment</h1>
        {{-- edit-comment form / method(PATCH) --}}
        <form action="{{ route('comments.update', $comment->id) }}" method="POST"
            class="text-slate-950 text-left flex bg-neutral-100 w-6/12 rounded-xl px-10 py-6">
            @csrf
            @method('PATCH')
            <textarea type="text" name="comment" id="comment" class="w-full px-4 resize-none bg-slate-200 min-h-40"
                placeholder="Comment by ">{{ $comment->comment }}</textarea>
            <button type="submit" class=" text-2xl ml-2 text-sky-800 px-2"><i
                    class="fa-regular fa-paper-plane"></i></button>
        </form>
        <div class="buttons mt-10">
            <a href="{{ route('post.show', $comment->post_id) }}"
                class="bg-neutral-100 text-xl px-4 py-1 rounded-md cursor-pointer hover:underline">Back</a>
        </div>
    </div>
@endsection
