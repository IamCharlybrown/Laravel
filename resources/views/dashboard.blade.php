<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-black leading-tight drop-shadow-lg">
            {{ __('🛡️ Panel de Control - Administración Heroica') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-blue-950 via-purple-900 to-pink-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 bg-opacity-90 shadow-2xl rounded-2xl border border-yellow-500">
                <div class="p-8 text-white">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-3xl font-extrabold text-yellow-400 mb-2">✨ {{ __("Bienvenido al Centro de Comando") }}</h3>
                            <p class="text-lg text-gray-200">Administra el universo de superhéroes desde aquí.</p>
                        </div>
                        <div class="animate-pulse">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Admin Menu Cards -->
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card: Superhéroes -->
                <div class="bg-gradient-to-br from-blue-800 to-blue-900 border-2 border-blue-500 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <a href="{{ route('superheroes.index') }}" class="block p-6 text-white">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-blue-300">🦸 Superhéroes</h3>
                            <svg class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <p class="text-sm text-blue-200">Gestiona a todos tus héroes y villanos.</p>
                        <div class="mt-4 flex justify-between items-center text-blue-300 text-sm">
                            <span>Administrar</span>
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </a>
                </div>

                <!-- Card: Universos -->
                <div class="bg-gradient-to-br from-purple-800 to-purple-900 border-2 border-purple-500 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <a href="{{ route('universes.index') }}" class="block p-6 text-white">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-purple-300">🌌 Universos</h3>
                            <svg class="h-8 w-8 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5..." />
                            </svg>
                        </div>
                        <p class="text-sm text-purple-200">Controla los mundos paralelos y dimensiones.</p>
                        <div class="mt-4 flex justify-between items-center text-purple-300 text-sm">
                            <span>Administrar</span>
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </a>
                </div>

                <!-- Card: Géneros -->
                <div class="bg-gradient-to-br from-red-800 to-red-900 border-2 border-red-500 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <a href="{{ route('genders.index') }}" class="block p-6 text-white">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-bold text-red-300">🧬 Géneros</h3>
                            <svg class="h-8 w-8 text-red-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292..." />
                            </svg>
                        </div>
                        <p class="text-sm text-red-200">Administra las categorías de personajes.</p>
                        <div class="mt-4 flex justify-between items-center text-red-300 text-sm">
                            <span>Administrar</span>
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Acciones Rápidas -->
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2 bg-gray-900 bg-opacity-80 border-2 border-green-500 rounded-2xl shadow-lg p-6">
                    <h3 class="text-xl font-bold text-green-400 mb-4 flex items-center">
                        <svg class="h-6 w-6 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Acciones Rápidas
                    </h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @php
                            $actions = [
                                ['route' => 'superheroes.create', 'label' => 'Añadir Superhéroe'],
                                ['route' => 'universes.create', 'label' => 'Crear Universo'],
                                ['route' => 'genders.create', 'label' => 'Nuevo Género'],
                            ];
                        @endphp
                        @foreach ($actions as $action)
                            <a href="{{ route($action['route']) }}" class="bg-green-800 border border-green-600 hover:bg-green-700 p-4 rounded-lg flex items-center transition-colors duration-300">
                                <svg class="h-6 w-6 mr-3 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                                <span>{{ $action['label'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
