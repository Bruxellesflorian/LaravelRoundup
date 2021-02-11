<link rel="stylesheet" href="style.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            <h2 class="test">La liste des livres</h2>
            <p class="test"><a href="{{route('livre.create')}}">Create book</a></p>
             </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <table class="test">
                <tr>
                <th>id</th>
                <th>Titre</th>
                <th>Author</th>
                <th>Genre</th>
                </tr>
                @foreach($livre as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$post->genre}}</td>
                    <td><a href="{{route('livre.show', $post->id)}}">Affiche</a></td>  
                    <td><a href="{{route('livre.edit', $post->id)}}">Edit</a></td>  
                    <td>
                    <form action="{{ route('livre.destroy', $post->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    </td>  
                    </tr>                    
                @endforeach 
                
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
