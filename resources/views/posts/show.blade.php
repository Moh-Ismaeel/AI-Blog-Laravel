@extends('layouts.app')

@section('title', 'Show Post')

@section('read-update')
    <div class="show-card max-w-4xl flex justify-between gap-14 text-slate-950 mx-auto my-14">
        <img src="/images/{{ $post->image }}" alt="" class=" max-w-96">
        <div class="content">
            <h1 class="main-title text-3xl text-left ">{{ $post->title }}</h1>
            <p class="text-white mt-6 text-left min-w-96">{{ $post->description }}</p>
            <div class="buttons flex gap-4 my-8">
                <a href="{{ route('post.index') }}" class="bg-neutral-100 text-xl px-4 py-1 rounded-md">Back</a>
                <a href="" class="bg-neutral-100 text-xl px-4 py-1 rounded-md">More</a>
            </div>
        </div>
    </div>
@endsection
