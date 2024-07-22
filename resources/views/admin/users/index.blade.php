@extends('layouts.app')

@section('title', 'Show Post')

@section('logout')
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit"
            class="font-semibold text-lg border border-white rounded-md px-2 hover:bg-white hover:text-slate-800">Logout</button>
    </form>
@endsection

@section('hero-content')
    <h1 class="font-semibold text-2xl pb-3">All Users</h1>
    <div class="manageusers flex justify-center items-center mt-10">
        <table class="w-7/12 text-left border border-solid border-white">
            <thead class="border border-solid border-white">
                <th class="border border-solid border-white pl-2 ">Id</th>
                <th class="border border-solid border-white pl-2">userImage</th>
                <th class="border border-solid border-white pl-2">userName</th>
                <th class="border border-solid border-white pl-2">email</th>
                <th class="border border-solid border-white pl-2">Actions</th>
            </thead>
            <tbody class="border border-solid border-white">
                @forelse ($users as $user)
                    <tr class="border border-solid border-white">
                        <td class="border border-solid border-white pl-2 py-3">{{ $user->id }}</td>
                        <td class="border border-solid border-white pl-2 py-3"><img src="/images/{{ $user->image }}"
                                alt="No Image" class="w-16 rounded-full"></td>
                        <td class="border border-solid border-white pl-2 py-3">{{ $user->name }}</td>
                        <td class="border border-solid border-white pl-2 py-3">{{ $user->email }}</td>
                        <td class="border border-solid border-white px-2 py-3">
                            <form action="{{ route('admin.users.delete', $user->id) }}" method="POST"
                                class="bg-red-700 px-4 py-2 rounded-sm cursor-pointer flex justify-center items-center gap-1 border border-transparent hover:border hover:border-neutral-50">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="cursor-pointer">
                                <i class="fa-solid fa-trash"></i>
                            </form>
                        </td>
                    </tr>
                    {{-- message if no users --}}
                @empty
                    <p class="text-white text-xl">No Users</p>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
