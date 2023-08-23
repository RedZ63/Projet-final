<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">
            {{ __('Créer une actualité') }}
        </h2>
    </x-slot>

    <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8 py-8">
        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data" class="pl-10">
            <div class="my-5">
                @foreach($errors->all() as $error)
                    <span class="block text-red-500">{{ $error }}</span>
                @endforeach
            </div>
            
            @csrf
            <label for="title" class="block font-semibold mb-2">Titre du post</label>
            <input id="title" name="title" class="border rounded-md w-full py-2 px-3 mb-4">

            <label for="content" class="block font-semibold mb-2">Contenu du post</label>
            <textarea id="content" name="content" class="border rounded-md w-full py-2 px-3 mb-4 h-40"></textarea>

            <label for="image" class="block font-semibold mb-2">Image du post</label>
            <input id="image" type="file" name="image" class="mb-4">

            <label for="category" class="block font-semibold mb-2">Catégorie du post</label>
            <select name="category" id="category" class="border rounded-md w-full py-2 px-3 mb-4">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                ENREGISTRER
            </button>
        </form>
    </div>

</x-app-layout>
@include('layouts.footer')