@extends('layouts.app')
@section('content')
    <div class="mb-2 text-xl font-light text-gray-700">
        <div class="p-2 bg-white rounded-tl-lg rounded-tr-lg">
            <div class="flex items-center justify-between">
                <h2 class="p-1 text-lg md:text-lg text-black font-normalleading-tight flex items-center justify-start">
                    {{ __('Création Projet') }}
                </h2>
            </div>
        </div>
    </div>

    <div class="bg-white -mt-3 overflow-hidden border border-gray-200 shadow-sm sm:rounded-lg">
        <section class="container w-full p-6 pb-0 mx-auto shadow-md shadow-black rounded-bl-lg rounded-br-lg">
            <div class="-mt-6 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('referentiels.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">
                        <fieldset>
                            <div class="pt-4">
                                <label for="code" class="block text-sm font-medium leading-6 text-gray-900">Code</label>
                                <div class="relative mt-1">
                                    <input type="text" name="code" id="code" value="{{ old('code') }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('code')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="libelle" class="block text-sm font-medium leading-6 text-gray-900">Libelle</label>
                                <div class="relative mt-1">
                                    <input type="text" name="libelle" id="libelle" value="{{ old('libelle') }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('libelle')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            {{-- ================================================================= --}}
                            <div class="pt-4">
                                <label for="libelle" class="block text-sm font-medium leading-6 text-gray-900">Date debut</label>
                                <div class="relative mt-1">
                                    <input type="text" name="libelle" id="libelle" value="{{ old('libelle') }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('libelle')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="libelle" class="block text-sm font-medium leading-6 text-gray-900">Date fin</label>
                                <div class="relative mt-1">
                                    <input type="text" name="libelle" id="libelle" value="{{ old('libelle') }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('libelle')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            {{-- ================================================================= --}}
                        </fieldset>

                        {{-- ************************************************************** --}}
                        <fieldset>
                            <div class="pt-4">
                                <label for="statut" class="block text-sm font-medium leading-6 text-gray-900">Statut</label>
                                <div class="relative mt-1">
                                    <input type="text" name="statut" id="statut" value="{{ old('statut') }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('statut')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="budget" class="block text-sm font-medium leading-6 text-gray-900">Budget</label>
                                <div class="relative mt-1">
                                    <input type="text" name="budget" id="budget" value="{{ old('budget') }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('budget')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            {{-- ================================================================= --}}
                            <div class="pt-4">
                                <label for="evolution" class="block text-sm font-medium leading-6 text-gray-900">Evolution/Poucentage</label>
                                <div class="relative mt-1">
                                    <input type="text" name="evolution" id="evolution" value="{{ old('evolution') }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('evolution')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                <div class="relative mt-1">
                                    <input type="text" name="description" id="description" value="{{ old('description') }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('description')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            {{-- ================================================================= --}}
                        </fieldset>
                    </div>
{{--                    butons de navigation--}}
                    <div class="grid md:flex grid-cols-2 justify-start gap-4 mt-3 p-2">
                        <a href="{{route('referentiels.index')}}">
                            <p class="py-1 px-4 border rounded-md border-sfe_color text-sfe_color cursor-pointer uppercase text-sm font-extralight hover:bg-sfe_color hover:text-white hover:shadow">
                                Retour
                            </p>
                        </a>

                        <button type="submit" class="py-1 px-4 border rounded-md border-sfe_color text-sfe_color cursor-pointer uppercase text-sm font-extralight hover:bg-sfe_color hover:text-white hover:shadow">
                            Enrégistrer
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
