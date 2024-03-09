@extends('layouts.app')
@section('content')
    <h3 class="mb-2 text-xl font-light text-gray-700">{{ __('Tableau de bord') }}</h3>
    <div class="bg-gray-50 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-3 border-b border-gray-200">

            {{-- ========================================================================= --}}
    <!-- Barre de navigation -->
    <nav class="bg-gray-800 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold">Tableau de bord administrateur</h1>
        </div>
    </nav>

    <!-- Contenu du tableau de bord -->
    <div class="container mx-auto mt-4 p-4">

        <!-- Statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Utilisateurs enregistrés</h2>
                <p class="text-3xl font-bold">1200</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Commandes en attente</h2>
                <p class="text-3xl font-bold">25</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">Produits disponibles</h2>
                <p class="text-3xl font-bold">150</p>
            </div>
        </div>

        <!-- Liste des utilisateurs -->
        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Liste des utilisateurs</h2>
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">ID</th>
                        <th class="py-2 px-4 border-b">Nom</th>
                        <th class="py-2 px-4 border-b">Email</th>
                        <th class="py-2 px-4 border-b">Rôle</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemple d'une ligne d'utilisateur -->
                    <tr>
                        <td class="py-2 px-4 border-b">1</td>
                        <td class="py-2 px-4 border-b">John Doe</td>
                        <td class="py-2 px-4 border-b">john.doe@example.com</td>
                        <td class="py-2 px-4 border-b">Administrateur</td>
                    </tr>
                    <!-- Ajoutez d'autres lignes selon vos besoins -->
                </tbody>
            </table>
        </div>
    </div>

            {{-- ========================================================================= --}}
        </div>
    </div>
@endsection
