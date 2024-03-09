<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use App\Models\DetailReferentiel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Centre::query()
            ->when(request()->has('search'), function ($query) {
                $query->where(function ($query) {
                    $query->where('nom_centre', 'like', '%'.request('search').'%')
                        ->orWhere(function ($q) {
                            $q->whereRelation('laProvince', 'libelle', 'like', '%'.request('search').'%');
                        })
                        ->orWhere(function ($q) {
                            $q->whereRelation('laCommune', 'libelle', 'like', '%'.request('search').'%');
                        });
                });
            })
            ->orderby('nom_centre', 'asc')
            ->get();
        return view('centres.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas['les_provinces'] = DetailReferentiel::query()->whereRelation('leReferentiel', 'code', '=', 'PROV')->orderBy('code', 'asc')->get();
        $datas['les_communes'] = DetailReferentiel::query()->whereRelation('leReferentiel', 'code', '=', 'COM')->orderBy('code', 'asc')->get();
        $datas['les_etats'] = DetailReferentiel::query()
            ->whereRelation('leReferentiel', 'code', '=', 'ETA')
            ->orderBy('code', 'asc')->get();

        return view('centres.create')->with($datas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'nom_centre' => 'string|required|max:155|unique:centres',
                'province_id' => 'integer|nullable',
                'commune_id' => 'integer|nullable',
                'adresse' => 'string|required|max:155',
                'etat_id' => 'integer|nullable',
            ],
            [
                'nom_centre' => [
                    'required' => 'Le nom du centre est obligatoire',
                    'max' => 'Le nom du centre ne peut dépasser 155 caractères!',
                    'unique' => 'Ce nom du centre existe déjà dans la base',
                ],
                'adresse' => [
                    'required' => 'L\'adresse est obligatoire',
                    'max' => 'L\'adresse ne peut dépasser 155 caractères!',
                ],
            ]);

        try {
            $insert = new Centre();
            $insert->nom_centre = request('nom_centre');
            $insert->province_id = request('province_id');
            $insert->commune_id = request('commune_id');
            $insert->adresse = request('adresse');
            $insert->etat_id = request('etat_id');
            if($insert->save()){
                Alert::success(request('nom_centre'), 'ajouté avec succès');
                return redirect()->route('centre.index');
            }
        }
        catch (\Exception $e){
            Alert::error('Erreur', $e->getMessage());
            return redirect()->route('centre.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Centre $centre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $laligne = Centre::findOrFail($id);
        $laligne['les_provinces'] = DetailReferentiel::query()->whereRelation('leReferentiel', 'code', '=', 'PROV')->orderBy('code', 'asc')->get();
        $laligne['les_communes'] = DetailReferentiel::query()->whereRelation('leReferentiel', 'code', '=', 'COM')->orderBy('code', 'asc')->get();
        $laligne['les_etats'] = DetailReferentiel::query()->whereRelation('leReferentiel', 'code', '=', 'ETA')->orderBy('code', 'asc')->get();

        return view('centres.edit', compact('laligne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $this->validate($request,
            [
                'nom_centre' => 'string|required|max:155',
                'province_id' => 'integer|nullable',
                'commune_id' => 'integer|nullable',
                'adresse' => 'string|required|max:155',
                'etat_id' => 'integer|nullable',
            ],
            [
                'nom_centre' => [
                    'required' => 'Le nom du centre est obligatoire',
                    'max' => 'Le nom du centre ne peut dépasser 155 caractères!',
                    'unique' => 'Ce nom du centre existe déjà dans la base',
                ],
                'adresse' => [
                    'required' => 'L\'adresse est obligatoire',
                    'max' => 'L\'adresse ne peut dépasser 155 caractères!',
                ],
            ]);

        $laligne = Centre::find($id);
        try {
            $laligne->update([
                'nom_centre' => request('nom_centre'),
                'province_id' => request('province_id'),
                'commune_id' => request('commune_id'),
                'adresse' => request('adresse'),
                'etat_id' => request('etat_id'),
            ]);
            if($laligne->update()){
                Alert::success('Centre', 'modifié avec succès');
                return redirect()->route('centre.index');
            }
        }
        catch (\Exception $e) {
            Alert::error('Erreur', $e->getMessage());
            return redirect()->route('centre.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $laligne = Centre::find($id);
        try {
            if($laligne->delete()){
                Alert::warning('Centre', 'supprimé avec succès');
                return redirect()->route('centre.index');
            }
        }
        catch (\Exception $e){
            Alert::error('Erreur', $e->getMessage());
            return redirect()->route('centre.index');
        }
    }
}
