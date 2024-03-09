@extends('layouts.app')
@section('content')
    <div class="mb-2 text-xl font-light text-gray-700">
        <div class="p-2 bg-white rounded-tl-lg rounded-tr-lg">
            <div class="flex items-center justify-between">
                <h2 class="p-1 text-lg md:text-lg text-black font-normalleading-tight flex items-center justify-start">
                    MODIFICATION DU CENTRE ({{ $laligne?->nom_centre }})
                </h2>
            </div>
        </div>
    </div>

    <div class="bg-white -mt-3 overflow-hidden border border-gray-200 shadow-sm sm:rounded-lg">
        <section class="container w-full p-6 pb-0 mx-auto shadow-md shadow-black rounded-bl-lg rounded-br-lg">
            <div class="-mt-6 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('centre.update', $laligne?->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">
                        <fieldset>
                            <div class="pt-4">
                                <label for="nom_centre" class="block text-sm font-medium leading-6 text-gray-900">Nom du centre <span class="text-red-600">*</span></label>
                                <div class="relative mt-1">
                                    <input type="text" name="nom_centre" id="nom_centre" value="{{ $laligne?->nom_centre }}" required maxlength="155" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('nom_centre')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="province_id" class="block text-sm font-medium leading-6 text-gray-900">Province <span class="text-red-600">*</span></label>
                                <div class="relative mt-1">
                                    <select name="province_id" class="form-select peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                        <option disabled selected>Sélectionner ici..</option>
                                        @forelse  ($laligne?->les_provinces as $v)
                                            <option id="provinces" value=" {{ $v->id }} " {{ ($v->id == $laligne->province_id)?"selected":"" }}> {{ $v?->libelle }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('province_id')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="commune_id" class="block text-sm font-medium leading-6 text-gray-900">Commune/Département <span class="text-red-600">*</span></label>
                                <div class="relative mt-1">
                                    <select name="commune_id" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                        <option disabled selected>Sélectionner ici..</option>
                                        @forelse  ($laligne?->les_communes as $v)
                                            <option value=" {{ $v->id }} " {{ ($v->id == $laligne->commune_id)?"selected":"" }}> {{ $v?->libelle }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('commune_id')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="pt-4">
                                <label for="adresse" class="block text-sm font-medium leading-6 text-gray-900">Adresse <span class="text-red-600">*</span></label>
                                <div class="relative mt-1">
                                    <input type="text" name="adresse" id="adresse" value="{{ $laligne?->adresse }}" required class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('adresse')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="etat_id" class="block text-sm font-medium leading-6 text-gray-900">Statut <span class="text-red-600">*</span></label>
                                <div class="relative mt-1">
                                    <select name="etat_id" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                        @forelse  ($laligne?->les_etats as $v)
                                            <option value=" {{ $v->id }} " {{ ($v->id == $laligne->etat_id)?"selected":"" }}> {{ $v?->libelle }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('etat_id')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
{{--                    butons de navigation--}}
                    <div class="grid md:flex grid-cols-2 justify-end gap-4 mt-3 p-2">
                        <a href="{{route('centre.index')}}">
                            <p class="py-1 px-4 border rounded-md border-ventis_color text-ventis_color cursor-pointer uppercase text-sm font-extralight hover:bg-ventis_color hover:text-white hover:shadow">
                                Retour
                            </p>
                        </a>

                        <button type="submit" class="py-1 px-4 border rounded-md border-ventis_color text-ventis_color cursor-pointer uppercase text-sm font-extralight hover:bg-ventis_color hover:text-white hover:shadow">
                            Appliquer la modification
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
