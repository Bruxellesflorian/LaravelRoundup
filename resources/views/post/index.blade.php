<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
            La liste de postes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <table>
                <tr>
                <th>id</th>
                <th>Titre</th>
                <th>Afficher</th>
                <th>Editer</th>
                </tr>
                @foreach($posts as $post)
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td><a href="{{route('post.show', $post->id)}}">afficher</a></td>
                    <td><a href="{{route('post.edit', $post->id)}}">editer</a></td>
                @endforeach 
                
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
