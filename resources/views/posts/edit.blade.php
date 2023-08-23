<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer ') }} {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data"
                class="p-4 bg-white shadow sm:rounded-lg">
                <div class="my-5">
                    @foreach($errors->all() as $error)
                    <span class="block text-red-500">{{ $error }}</span>
                    @endforeach
                </div>
                @method('put')
                @csrf
                <label for="title">Titre du post</label>
                <input id="title" name="title" value="{{ $post->title }}" class="w-full p-2 border rounded-md" />

                <label for="content">Contenu du post</label>
                <textarea id="content" name="content" class="w-full p-2 border rounded-md">{{ $post->content }}</textarea>

                <label for="image">Image du post</label>
                <input id="image" type="file" name="image" class="w-full p-2 border rounded-md" />

                <label for="category">Categorie du post</label>

                <select name="category" id="category" class="w-full p-2 border rounded-md">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category_id === $category->id ?  'selected' : ''}}>
                        {{ $category->name }}</option>
                    @endforeach
                </select>

                <button type="submit" class="mt-4 py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                    Modifier</button>
            </form>
        </div>
    </div>
</x-app-layout>
@include('layouts.footer')