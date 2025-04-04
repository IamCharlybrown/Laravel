<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Superheroes') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-2xl font-bold text-gray-900">Superheroes List</h1>
            <a href="{{ route('superheroes.create') }}" class="btn btn-primary bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Add New Superhero</a>
        </div>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto border-collapse">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-2 border-b">ID</th>
                        <th class="px-4 py-2 border-b">Name</th>
                        <th class="px-4 py-2 border-b">Real Name</th>
                        <th class="px-4 py-2 border-b">Universe</th>
                        <th class="px-4 py-2 border-b">Gender</th>
                        <th class="px-py-2  border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($superheroes as $superhero)
                    <tr class="text-gray-800 hover:bg-gray-50">
                        <td class="px-4 py-2 border-b">{{ $superhero->id }}</td>
                        <td class="px-4 py-2 border-b">{{ $superhero->name }}</td>
                        <td class="px-4 py-2 border-b">{{ $superhero->real_name }}</td>
                        <td class="px-4 py-2 border-b">{{ $superhero->universe->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2 border-b">{{ $superhero->gender->name ?? 'N/A' }}</td>
                        <td class="px-4 py-2 border-b space-x-2">
                            <a href="{{ route('superheroes.show', $superhero->id) }}" class="btn btn-sm mx-20 bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</a>
                            <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-sm bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
