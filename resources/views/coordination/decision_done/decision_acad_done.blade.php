@extends('layouts.app')
@section('content')
    <div class="mb-2 text-xl font-light text-gray-700">
        <div class="p-2 bg-white rounded-tl-lg rounded-tr-lg">
            <div class="flex items-center justify-between">
                <h2 class="p-1 text-lg md:text-lg text-black font-normalleading-tight flex items-center justify-start">
                    {{ __('Décision générale academique') }}
                </h2>
            </div>
        </div>
    </div>

    <div class="bg-white -mt-3 overflow-hidden border border-gray-200 shadow-sm sm:rounded-lg">
        <section class="container w-full p-6 pb-0 mx-auto shadow-md shadow-black rounded-bl-lg rounded-br-lg">
            <div class="-mt-6 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">
                        <fieldset>
                            <div class="pt-4">
                                <label for="code" class="block text-sm font-medium leading-6 text-blue-900">Session</label>
                                <div class="relative mt-1">
                                    <input type="text" name="code" id="code" value="#" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    {{-- @error('code')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror --}}
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="parent_id" class="block text-sm font-medium leading-6 text-blue-900">Intervenant</label>
                                <div class="relative mt-1">
                                    <select name="parent_id" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                        {{-- @forelse  ($leparent as $v) --}}
                                            {{-- <option value=" {{ $v->id }} "> {{ $v?->libelle }}</option> --}}
                                            <option value="1">Nom</option>
                                            <option value="1">Ville</option>
                                            <option value="1">Ville</option>
                                        {{-- @empty
                                        @endforelse --}}
                                    </select>
                                    {{-- @error('parent_id')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror --}}
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>

                            <div class="pt-4">
                                <label for="parent_id" class="block text-sm font-medium leading-6 text-blue-900">Centre Examen</label>
                                <div class="relative mt-1">
                                    <select name="parent_id" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                        {{-- @forelse  ($leparent as $v) --}}
                                            {{-- <option value=" {{ $v->id }} "> {{ $v?->libelle }}</option> --}}
                                            <option value="1">Mouila</option>
                                            <option value="1">Lycée d'Etat lbv</option>
                                            <option value="1">Ville</option>
                                        {{-- @empty
                                        @endforelse --}}
                                    </select>
                                    {{-- @error('parent_id')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror --}}
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                        </fieldset>

                        {{-- ========================================================================================= --}}
                        {{-- ====================Deuxieme colonne ou deuxieme partie====================== --}}
                        <fieldset>
                            <div class="pt-4">
                                <label for="parent_id" class="block text-sm font-medium leading-6 text-blue-900">Fonction</label>
                                <div class="relative mt-1">
                                    <select name="parent_id" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                        {{-- @forelse  ($leparent as $v) --}}
                                            {{-- <option value=" {{ $v->id }} "> {{ $v?->libelle }}</option> --}}
                                            <option value="1">Enseignant</option>
                                            <option value="1">Membre jury</option>
                                        {{-- @empty
                                        @endforelse --}}
                                    </select>
                                    {{-- @error('parent_id')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror --}}
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="parent_id" class="block text-sm font-medium leading-6 text-blue-900">Role</label>
                                <div class="relative mt-1">
                                    <select name="parent_id" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                        {{-- @forelse  ($leparent as $v) --}}
                                            {{-- <option value=" {{ $v->id }} "> {{ $v?->libelle }}</option> --}}
                                            <option value="1">Surveillant</option>
                                            <option value="1">Correcteur</option>
                                        {{-- @empty
                                        @endforelse --}}
                                    </select>
                                    {{-- @error('parent_id')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror --}}
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="parent_id" class="block text-sm font-medium leading-6 text-blue-900">Epreuve</label>
                                <div class="relative mt-1">
                                    <select name="parent_id" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                        {{-- @forelse  ($leparent as $v) --}}
                                            {{-- <option value=" {{ $v->id }} "> {{ $v?->libelle }}</option> --}}
                                            <option value="1">Maths</option>
                                            <option value="1">Francais</option>
                                            <option value="1">Histoire</option>
                                        {{-- @empty
                                        @endforelse --}}
                                    </select>
                                    {{-- @error('parent_id')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror --}}
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>

                            <div class="pt-4">
                                <label for="code" class="block text-sm font-medium leading-6 text-blue-900">Passage</label>
                                <div class="relative mt-1">
                                    <input type="radio" name="code" id="code" value="#" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    {{-- @error('code')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror --}}
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                        </fieldset>
                        {{-- ========================================================================================= --}}
                    </div>
                    {{--butons de navigation--}}
                    <div class="grid md:flex grid-cols-2 justify-start gap-4 mt-3 p-2">
                        <a href="{{route('decision_admin.index')}}">
                            <p class="py-1 px-4 border rounded-md border-sfe_color text-sfe_color cursor-pointer uppercase text-sm font-extralight hover:bg-sfe_color hover:text-white hover:shadow">
                                Retour
                            </p>
                        </a>

                        <button type="submit" class="py-1 px-4 border rounded-md border-sfe_color text-sfe_color cursor-pointer uppercase text-sm font-extralight hover:bg-sfe_color hover:text-white hover:shadow">
                            Appliquer
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
