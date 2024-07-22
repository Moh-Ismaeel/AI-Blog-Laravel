@extends('layouts.app')

@section('title', 'Login')

@section('hero-content')
    <div class="hero-content mt-14">
        <h1 class="text-3xl font-bold">Login</h1>
        @if ($errors->any())
            <div class="my-3 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form flex justify-center items-center">
            <form action="{{ route('login') }}" method="POST" class="flex flex-col text-left w-80 gap-4">
                @csrf
                <div class="input ">
                    <label for="email">Email:</label>
                    <div class="inp flex items-center gap-2 bg-white pr-3">
                        <input type="email" id="email" name="email" placeholder="example@gmail.com"
                            class="text-slate-950 w-80 h-10 pl-2 outline-none border-r border-slate-300 border-solid"
                            required>
                        <i class="fa-solid fa-envelope text-slate-900 text-lg "></i>
                    </div>
                </div>
                <div class="input">
                    <label for="password">Password:</label>
                    <div class="inp  flex items-center gap-2 bg-white pr-3">
                        <input type="password" id="password" name="password"
                            class="text-slate-950 w-80 h-10 pl-2 outline-none border-r border-slate-300 border-solid"
                            required>
                        <i class="fa-solid fa-lock text-slate-900 text-lg"></i>
                    </div>
                </div>
                <button type="submit"
                    class="bg-neutral-100 text-slate-900 font-semibold text-xl px-4 py-1 rounded-md w-44 mx-auto border border-transparent hover:bg-sky-600 hover:border-solid hover:border-neutral-100 hover:border hover:text-white">Login</button>
                <p class="text-center">Don't have an account? <a href="{{ route('register') }}"
                        class="underline hover:text-sky-500">Register</a>
                </p>
            </form>
        </div>
    </div>

@endsection
