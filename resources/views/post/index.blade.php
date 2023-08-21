<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="py-8 px-4 sm:px-6 lg:px-8 grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <img src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
                    <p class="mt-2 text-gray-600">{{ $post->excerpt }}</p>
                </div>
                <div class="p-4 bg-gray-100 flex justify-center items-center">
                    <a href="{{ route('posts.show', $post) }}" class="text-indigo-500 hover:text-indigo-600">Voir plus</a>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
@include('layouts.footer')