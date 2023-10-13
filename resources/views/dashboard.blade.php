<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="text-2xl font-bold">{{ __('Welcome to your Dashboard') }}</p>
                    <p class="mb-4">{{ __("You're logged in!") }}</p>

                    <div class="mb-4">
                        <p class="text-lg font-semibold">{{ __('User Information') }}</p>
                        <ul class="list-disc pl-4">
                            <li>
                                <span class="font-semibold text-blue-500">
                                    <i class="fas fa-user-circle"></i>
                                    {{ __('Name') }}:
                                </span>
                                {{ auth()->user()->name }}
                            </li>
                            @if (auth()->user()->type)
                                <li>
                                    <span class="font-semibold text-green-500">
                                        <i class="fas fa-user-tie"></i>
                                        {{ __('Type') }}:
                                    </span>
                                    {{ auth()->user()->type }}
                                </li>
                            @endif
                            @if (auth()->user()->adresse)
                                <li>
                                    <span class="font-semibold text-purple-500">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ __('Adresse') }}:
                                    </span>
                                    {{ auth()->user()->adresse }}
                                </li>
                            @endif
                            @if (auth()->user()->contact)
                                <li>
                                    <span class="font-semibold text-orange-500">
                                        <i class="fas fa-phone"></i>
                                        {{ __('Contact') }}:
                                    </span>
                                    {{ auth()->user()->contact }}
                                </li>
                            @endif
                            @if (auth()->user()->date_de_naissance)
                                <li>
                                    <span class="font-semibold text-red-500">
                                        <i class="fas fa-birthday-cake"></i>
                                        {{ __('Date de naissance') }}:
                                    </span>
                                    {{ auth()->user()->date_de_naissance }}
                                </li>
                            @endif
                            @if (auth()->user()->username)
                                <li>
                                    <span class="font-semibold text-indigo-500">
                                        <i class="fas fa-user"></i>
                                        {{ __('Username') }}:
                                    </span>
                                    {{ auth()->user()->username }}
                                </li>
                            @endif
                            @if (auth()->user()->email)
                                <li>
                                    <span class="font-semibold text-teal-500">
                                        <i class="fas fa-envelope"></i>
                                        {{ __('Email') }}:
                                    </span>
                                    {{ auth()->user()->email }}
                                </li>
                            @endif
                        </ul>
                    </div>

                    <!-- Vous pouvez ajouter d'autres informations ici, le cas échéant -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
