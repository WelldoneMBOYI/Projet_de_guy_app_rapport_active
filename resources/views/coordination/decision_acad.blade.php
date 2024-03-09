{{--<x-app-layout>--}}
    @extends('layouts.app')
    @section('content')
    {{--    <x-slot name="header">--}}
    {{--        {{ __('Utilisateurs') }}--}}
    {{--    </x-slot>--}}
        <div class="mb-2 text-xl font-light text-gray-700 border-b-2">
            <div class="p-2 bg-white rounded-tl-lg rounded-tr-lg">
                <div class="flex items-center justify-between">
                    <h2 class="p-1 text-lg md:text-lg text-black font-normalleading-tight flex items-center justify-start">
                        {{ __('Tableau de bord de coordination Générale academique') }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="mb-4 inline-flex overflow-hidden w-full bg-white rounded-lg shadow-md">
            <div class="flex justify-center items-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z"></path>
                </svg>
            </div>
            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-blue-500">Informations</span>
                    <p class="text-sm text-gray-600">Faites le choix d'une Option.</p>
                </div>
            </div>
        </div>
    
        <div class="bg-white -mt-3 overflow-hidden border border-gray-200 shadow-sm sm:rounded-lg">
        <section class="container w-full p-6 pb-0 mx-auto shadow-md shadow-black rounded-bl-lg rounded-br-lg">
            <div class="flex flex-col">
                <div class="-mx-4 -my-2 overflow-x-auto overflow-auto sm:-mx-6 lg:-mx-8">
                    <div class="flex justify-start gap-3 px-1 lg:px-4">
                        {{-- <div class="mb-4 pb-5">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <div class="btn-danger">Ajouter</div>
                            </div>
                        </div> --}}
                        {{-- =================================================================================================== --}}
                        <span class="mb-5 pb-5 ml-5 mt-5">
                            <a href="{{route('dashboard')}}" title="Retour">
                                <button class="flex items-center px-2 py-1 text-sm tracking-wide text-color_rej transition-colors duration-200 bg-ventis_color rounded-lg shrink-0 sm:w-auto gap-x-1 hover:bg-color_att">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                                    </svg>
                                </button>
                            </a>
                        </span>
                        {{-- =================================================================================================== --}}
                        <span class="mb-5 pb-5 ml-5 mt-5">
                            <a href="{{route('decision_acad.done')}}" title="Créer ici..">
                                <button class="flex items-center px-2 py-1 text-sm tracking-wide text-color_rej transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-1 hover:bg-ventis_color">
                                    <p>Décision</p>
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                      <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                    </svg> --}}
                                </button>
                            </a>
                        </span>

                        <span class="mb-5 pb-5 ml-5 mt-5">
                            <a href="#" title="Créer ici..">
                                <button class="flex items-center px-2 py-1 text-sm tracking-wide text-color_rej transition-colors duration-200 bg-color_att rounded-lg shrink-0 sm:w-auto gap-x-1 hover:bg-ventis_color">
                                    <p>Autres</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                      <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </a>
                        </span>
                    </div>

                </div>
            </div>
        </section>
    </div>
    
    
    
    {{--    <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">--}}
    {{--        <table class="min-w-full leading-normal">--}}
    {{--            <thead>--}}
    {{--            <tr>--}}
    {{--                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">--}}
    {{--                    Nom d'utilisateur--}}
    {{--                </th>--}}
    {{--                <th class="px-5 py-3 text-xs font-semibold tracking-wider text-left text-gray-600 uppercase bg-gray-100 border-b-2 border-gray-200">--}}
    {{--                    Adresse email--}}
    {{--                </th>--}}
    {{--            </tr>--}}
    {{--            </thead>--}}
    {{--            <tbody>--}}
    {{--            @foreach($users as $user)--}}
    {{--                <tr>--}}
    {{--                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">--}}
    {{--                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->name }}</p>--}}
    {{--                    </td>--}}
    {{--                    <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">--}}
    {{--                        <p class="text-gray-900 whitespace-no-wrap">{{ $user->email }}</p>--}}
    {{--                    </td>--}}
    {{--                </tr>--}}
    {{--            @endforeach--}}
    {{--            </tbody>--}}
    {{--        </table>--}}
    
    {{--        <div class="flex flex-col items-center px-5 py-5 bg-white border-t xs:flex-row xs:justify-between">--}}
    {{--            {{ $users->links() }}--}}
    {{--        </div>--}}
    {{--    </div>--}}
    @endsection
    {{--</x-app-layout>--}}
    