<?php

namespace App\Http\Controllers;

use App\Models\DetailReferentiel;
use App\Models\Intervenant;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class IntervenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Intervenant::query()
            ->when(request()->has('search'), function ($query) {
                $query->where(function ($query) {
                    $query->where('nom', 'like', '%'.request('search').'%')
                        ->orWhere('prenom', 'like', '%'.request('search').'%')
                        ->orWhere('matricule', 'like', '%'.request('search').'%')
                        ->orWhere('provenance', 'like', '%'.request('search').'%')
                        ->orWhere('titre', 'like', '%'.request('search').'%');
                });
            })
            ->orderby('nom', 'asc')
            ->get();
        return view('intervenants.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas['les_etats'] = DetailReferentiel::query()
            ->whereRelation('leReferentiel', 'code', '=', 'S-I')
            ->orderby('code', 'asc')
            ->get();
        return view('intervenants.create')->with($datas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'nom' => 'string|required|max:80',
                'prenom' => 'string|nullable|max:80',
                'matricule' => 'string|required|max:25|unique:intervenants',
                'titre' => 'string|required|max:155',
                'provenance' => 'string|required|max:155',
                'phone' => 'string|nullable|max:9',
                'email' => 'string|nullable|max:60',
                'etat_id' => 'integer|nullable',
            ],
            [
                'nom' => [
                    'required' => 'Le nom est obligatoire!',
                    'max' => 'Le nom ne peut dépasser 80 caractères!',
                ],
                'prenom' => [
                    'max' => 'Le prénom ne peut dépasser 80 caractères!',
                ],
                'matricule' => [
                    'required' => 'Le matricule est obligatoire!',
                    'max' => 'Le matricule ne peut dépasser 25 caractères!',
                    'unique' => 'Ce matricule existe déjà dans la base',
                ],
                'titre' => [
                    'required' => 'Le titre est obligatoire!',
                    'max' => 'Le titre ne peut dépasser 155 caractères!',
                ],
                'provenance' => [
                    'required' => 'La provenance est obligatoire!',
                    'max' => 'La provenance ne peut dépasser 155 caractères!',
                ],
                'phone' => [
                    'max' => 'le n° de téléphone ne peut dépasser 9 caractères!',
                ],
                'email' => [
                    'max' => 'Le mail ne peut dépasser 60 caractères!',
                ],
            ]);

        try {
            $insert = new Intervenant();
            $insert->nom = request('nom');
            $insert->prenom = request('prenom');
            $insert->matricule = request('matricule');
            $insert->titre = request('titre');
            $insert->provenance = request('provenance');
            $insert->phone = request('phone');
            $insert->email = request('email');
            $insert->etat_id = request('etat_id');
            if($insert->save()){
                Alert::success(request('nom'), 'ajouté avec succès');
                return redirect()->route('intervenant.index');
            }
        }
        catch (\Exception $e){
            Alert::error('Erreur', $e->getMessage());
            return redirect()->route('intervenant.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $laligne = Intervenant::findOrFail($id);
        $laligne['les_etats'] = DetailReferentiel::query()
            ->whereRelation('leReferentiel', 'code', '=', 'S-I')
            ->orderBy('code', 'asc')->get();

        return view('intervenants.edit', compact('laligne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $this->validate($request,
        [
            'nom' => 'string|required|max:80',
            'prenom' => 'string|nullable|max:80',
            'matricule' => 'string|required|max:25',
            'titre' => 'string|required|max:155',
            'provenance' => 'string|required|max:155',
            'phone' => 'string|nullable|max:9',
            'email' => 'string|nullable|max:60',
            'etat_id' => 'integer|nullable',
        ],
        [
            'nom' => [
                'required' => 'Le nom est obligatoire!',
                'max' => 'Le nom ne peut dépasser 80 caractères!',
            ],
            'prenom' => [
                'max' => 'Le prénom ne peut dépasser 80 caractères!',
            ],
            'matricule' => [
                'required' => 'Le matricule est obligatoire!',
                'max' => 'Le matricule ne peut dépasser 25 caractères!',
                'unique' => 'Ce matricule existe déjà dans la base',
            ],
            'titre' => [
                'required' => 'Le titre est obligatoire!',
                'max' => 'Le titre ne peut dépasser 155 caractères!',
            ],
            'provenance' => [
                'required' => 'La provenance est obligatoire!',
                'max' => 'La provenance ne peut dépasser 155 caractères!',
            ],
            'phone' => [
                'max' => 'le n° de téléphone ne peut dépasser 9 chiffres!',
            ],
            'email' => [
                'max' => 'Le mail ne peut dépasser 60 caractères!',
            ],
        ]);

        $laligne = Intervenant::find($id);
        try {
            $laligne->update([
                'prenom' => request('prenom'),
                'matricule' => request('matricule'),
                'titre' => request('titre'),
                'provenance' => request('provenance'),
                'phone' => request('phone'),
                'email' => request('email'),
                'etat_id' => request('etat_id'),
            ]);
            if($laligne->update()){
                Alert::success('Intervenant', 'modifié avec succès');
                return redirect()->route('intervenant.index');
            }
        }
        catch (\Exception $e) {
            Alert::error('Erreur', $e->getMessage());
            return redirect()->route('intervenant.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $laligne = Intervenant::find($id);
        try {
            if($laligne->delete()){
                Alert::warning('Intervenant', 'supprimé avec succès');
                return redirect()->route('intervenant.index');
            }
        }
        catch (\Exception $e){
            Alert::error('Erreur', $e->getMessage());
            return redirect()->route('intervenant.index');
        }
    }
}
