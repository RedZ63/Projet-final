<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
    </x-slot>

    <div class="mx-auto max-w-3xl">
        <img src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover object-center rounded-md shadow-lg mb-4">
        <div class="bg-white rounded-md shadow-md p-6">
            <div class="post">
                {!! $post->content !!}
            </div>
        </div>
    </div>

</x-app-layout>
@include('layouts.footer')