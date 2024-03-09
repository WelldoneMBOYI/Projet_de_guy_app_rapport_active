@extends('layouts.app')
@section('content')
    <div class="mb-2 text-xl font-light text-gray-700">
        <div class="p-2 bg-white rounded-tl-lg rounded-tr-lg">
            <div class="flex items-center justify-between">
                <h2 class="p-1 text-lg md:text-lg text-black font-normalleading-tight flex items-center justify-start">
                    MODIFICATION DE L'EXAMEN ({{ $laligne?->libelle_exam }})
                </h2>
            </div>
        </div>
    </div>

    <div class="bg-white -mt-3 overflow-hidden border border-gray-200 shadow-sm sm:rounded-lg">
        <section class="container w-full p-6 pb-0 mx-auto shadow-md shadow-black rounded-bl-lg rounded-br-lg">
            <div class="-mt-6 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{route('examen.update', $laligne?->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4">
                        <input type="hidden" name="id" value="{{ $laligne?->id }}">
                        <fieldset>
                            <div class="pt-4">
                                <label for="code_exam" class="block text-sm font-medium leading-6 text-gray-900">Code</label>
                                <div class="relative mt-1">
                                    <input type="text" name="code_exam" id="code_exam" value="{{ $laligne?->code_exam }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('code_exam')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="libelle_exam" class="block text-sm font-medium leading-6 text-gray-900">Nom de l'examen</label>
                                <div class="relative mt-1">
                                    <input type="text" name="libelle_exam" id="libelle_exam" value="{{ $laligne?->libelle_exam }}" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('libelle_exam')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="pt-4">
                                <label for="session_exam" class="block text-sm font-medium leading-6 text-gray-900">Session</label>
                                <div class="relative mt-1">
                                    <input type="text" name="session_exam" id="session_exam" value="{{ $laligne?->session_exam }}" placeholder="ex: 2023-2024" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                    @error('session_exam')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <label for="statut_exam_id" class="block text-sm font-medium leading-6 text-gray-900">Statut</label>
                                <div class="relative mt-1">
                                    <select name="statut_exam_id" class="peer block w-full border-0 bg-gray-50 py-0.5 text-gray-900 focus:ring-0 sm:text-sm sm:leading-6">
                                        @forelse  ($laligne?->statutExam as $v)
                                            <option value=" {{ $v->id }} " {{ ($v->id == $laligne->statut_exam_id)?"selected":"" }}> {{ $v?->libelle }}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('statut_exam_id')
                                    <div class="text-red-500 text-sm">{{$message}}</div>
                                    @enderror
                                    <div class="absolute inset-x-0 bottom-0 border-t border-ventis_color peer-focus:border-t-2 peer-focus:border-color_att" aria-hidden="true"></div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
{{--                    butons de navigation--}}
                    <div class="grid md:flex grid-cols-2 justify-end gap-4 mt-3 p-2">
                        <a href="{{route('examen.index')}}">
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
