<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                {{ session('success') }}
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($posts as $post)
                    <div class="flex items-center justify-between p-4 border-b border-gray-200">
                        <h3 class="text-lg">{{ $post->title }}</h3>
                        <div class="space-x-2">
                            <a href="{{ route('posts.edit', $post) }}" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-md">Editer</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="py-2 px-4 bg-red-500 hover:bg-red-600 text-white rounded-md">Supprimer</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>
@include('layouts.footer')