<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            Edite le livre ({{ $post->title }}) id {{ $post->id }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>{{$post->title}}</h1>
                <p>{{$post->content}}</p>
            </div>
        </div>
    </div>
</x-app-layout>
