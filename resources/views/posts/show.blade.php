    <head><meta name="description" content=" Restez à jour avec les dernières nouvelles et mises à jour de White Beauty. Explorez nos articles et informations sur le blanchiment dentaire, la presso-thérapie, les soins hydra-faciaux et bien plus encore pour briller de l'intérieur vers l'extérieur.">
    </head>
<div>
    <x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold mt-32 text-center">{{ $post->title }}</h2>
    </x-slot>
    <div class="loader-container">
    <div class="spinner"></div>
    <img src="../img/loader.gif" class="logo" alt="Logo">
</div>
    <div class="mx-auto max-w-3xl">
        <img src="{{ asset('/storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover object-center rounded-md shadow-lg mb-4">
        <div class="bg-white rounded-md shadow-md p-6">
            <div class="post">
                {!! $post->content !!}
            </div>
        </div>
    </div>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('comments.store', ['post' => $post->id]) }}">
            @csrf
            <textarea
                name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Commenter') }}</x-primary-button>
        </form>
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
          

            @foreach ($comments as $comment)
                <div class="p-6 flex space-x-2">
                   
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-800">{{ $comment->user->name }}</span>
                                <small class="ml-2 text-sm text-gray-600">{{ $comment->created_at->format('j M Y, g:i a') }}</small>
                                @unless ($comment->created_at->eq($comment->updated_at))
                                    <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                                @endunless
                            </div>
                            @if ($comment->user->is(auth()->user()))
                                <x-dropdown>
                                    <x-slot name="trigger">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">

                                    <x-dropdown-link :href="route('comments.edit', $comment)">
                                            {{ __('Editer') }}
                                        </x-dropdown-link>

                                     {{-- <form action="{{ route('comments.store', ['post' => $post->id],'comments.destroy', $comment) }}" class="flex flex-col" method="POST"> --}}
                                        <form action="{{ route('comments.destroy', ['post' => $post->id, 'comment' => $comment->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <x-dropdown-link :href="route('comments.destroy', $comment)" onclick="event.preventDefault(); this.closest('form').submit();">
                                                {{ __('Supprimer') }}
                                            </x-dropdown-link>
                                        </form>
                            
                                    </x-slot>
                                </x-dropdown>
                            @endif
                        </div>
                        <p class="mt-4 text-lg text-gray-900">{{ $comment->message }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <script src="../js/scripts.js"></script>
</x-app-layout>
@include('layouts.footer')