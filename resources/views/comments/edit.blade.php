<x-app-layout >
<div class="loader-container">
    <div class="spinner"></div>
    <img src="./public/img/Logo.png" class="logo" alt="Logo">
</div>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:mx-auto">
        <form method="POST" action="{{ route('comments.update', $comment) }}" style="margin-top: 10rem;">
            @csrf
            @method('patch')
            <textarea
                name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >
            {{ old('message', $comment->message) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Enregistrer') }}</x-primary-button>
                <a href="javascript:history.back()">{{ __('annuler') }}</a>
            </div>
        </form>
    </div>
    <script src="../js/scripts.js"></script>    
</x-app-layout>
