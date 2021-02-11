<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table>
                <form action="{{ route('livre.store')}}" method="post">
                @csrf
                @method('POST')
                <tr>
                    <td><label for="title">Title</label></td>
                    <td><input type="text" name='title' value=""></td>
                </tr>
                <tr>
                    <td><label for="author">author</label></td>
                    <td><input type="text" name='author' value=" "></td>
                </tr>
                <tr>
                    <td><label for="quantity">quantity</label></td>
                    <td><input type="text" name='quantity' value=" "></td>
                </tr>
                <tr>
                    <td><label for="genre">genre</label></td>
                    <td><input type="text" name='genre' value=" "></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit"></td>
                    
                </tr>
                </form>
                </table>
       
            </div>
        </div>
    </div>
</x-app-layout>

