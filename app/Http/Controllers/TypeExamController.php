<?php

namespace App\Http\Controllers;

use App\Models\DetailReferentiel;
use App\Models\TypeExamen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TypeExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $les_sessions = TypeExamen::query()
            ->select('session_exam')
            ->get();

        $selectedSession = $request->input('selected_session');

        $datas = TypeExamen::all();
        if ($selectedSession) {
            $datas = TypeExamen::where('session_exam', $selectedSession)->get();
        } else {
            $datas = [];
        }

        return view('examens.index', compact('datas', 'les_sessions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas['statutExam'] = DetailReferentiel::query()
            ->whereRelation('leReferentiel', 'code', '=', 'S-E')
            ->orderBy('code', 'asc')
            ->get();
        return view('examens.create')->with($datas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'code_exam' => 'string|required|max:5|unique:examens',
                'libelle_exam' => 'string|required|max:80|unique:examens',
                'session_exam' => 'string|required|max:11|unique:examens',
                'statut_exam_id' => 'integer|required',
            ],
            [
                'code_exam' => [
                    'required' => 'Le code est obligatoire',
                    'max' => 'Le code ne peut dépasser 5 caractères!',
                    'unique' => 'Ce code existe déjà dans la base',
                ],
                'libelle_exam' => [
                    'required' => 'Le nom de l\'examen est obligatoire',
                    'max' => 'Le nom de l\'examen ne peut dépasser 80 caractères!',
                    'unique' => 'Ce nom d\'examen existe déjà dans la base',
                ],
                'session_exam' => [
                    'required' => 'La session+le cdoe sont obligatoire!',
                    'max' => 'La ession+le code ne peuvent dépasser les 14 caractères!',
                    'unique' => 'Cette session+ce code existe déjà dans la base!',
                ]
            ]);

        try {
            $insert = new TypeExamen();
            $insert->code_exam = request('code_exam');
            $insert->libelle_exam = request('libelle_exam');
            $insert->session_exam = request('code_exam').''.request('session_exam');
            $insert->statut_exam_id = request('statut_exam_id');
            if($insert->save()){
                Alert::success(request('libelle_exam'), 'ajouté avec succès');
                return redirect()->route('examen.index');
            }
        }
        catch (\Exception $e){
            Alert::error('Erreur', $e->getMessage());
            return redirect()->route('examen.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $laligne = TypeExamen::findOrFail($id);
        $laligne['statutExam'] = DetailReferentiel::query()
            ->whereRelation('leReferentiel', 'code', '=', 'S-E')
            ->orderBy('code', 'asc')
            ->get();
        return view('examens.edit', compact('laligne'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $this->validate($request,
            [
                'code_exam' => 'string|required|max:5',
                'libelle_exam' => 'string|required|max:80',
                'session_exam' => 'string|required|max:11',
                'statut_exam_id' => 'integer|required',
            ],
            [
                'code_exam' => [
                    'required' => 'Le code est obligatoire',
                    'max' => 'Le code ne peut dépasser 5 caractères!',
                ],
                'libelle_exam' => [
                    'required' => 'Le nom de l\'examen est obligatoire',
                    'max' => 'Le nom de l\'examen ne peut dépasser 80 caractères!',
                ],
                'session_exam' => [
                    'required' => 'La session+le cdoe sont obligatoire!',
                    'max' => 'La ession+le code ne peuvent dépasser les 14 caractères!',
                ]
            ]);

        $laligne = TypeExamen::find($id);
        try {
            $laligne->update([
                'code_exam' => request('code_exam'),
                'libelle_exam' => request('libelle_exam'),
                'session_exam' => request('session_exam'),
                'statut_exam_id' => request('statut_exam_id'),
            ]);
            if($laligne->update()){
                Alert::success(request('libelle_exam'), 'modifié avec succès');
                return redirect()->route('examen.index');
            }
        }
        catch (\Exception $e) {
            Alert::error('Erreur', $e->getMessage());
            return redirect()->route('examen.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $laligne = TypeExamen::find($id);
        try {
            if($laligne->delete()){
                Alert::warning('Examen', 'supprimé avec succès');
                return redirect()->route('examen.index');
            }
        }
        catch (\Exception $e){
            Alert::error('Erreur', $e->getMessage());
            return redirect()->route('examen.index');
        }
    }
}
