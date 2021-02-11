<link rel="stylesheet" href="style.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
        </h2>
        <h1>{{ $livre->title }}</h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="test">
                <tr>
                <th>id</th>
                <th>Titre</th>
                <th>Author</th>
                <th>Genre</th>
                </tr>

                    <td>{{$livre->id}}</td>
                    <td>{{$livre->title}}</td>
                    <td>{{$livre->author}}</td>
                    <td>{{$livre->genre}}</td>

       
            </div>
        </div>
    </div>
</x-app-layout>
