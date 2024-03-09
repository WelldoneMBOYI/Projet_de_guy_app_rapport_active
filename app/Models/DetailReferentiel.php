<?php

namespace App\Models;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class DetailReferentiel extends Model
{
    /**
     * @var array|Application|\Illuminate\Foundation\Application|Request|mixed|string|null
     */
    protected $table = 'detail_referentiels';

    use HasFactory;

    public function leReferentiel(): BelongsTo
    {
        return $this->belongsTo(Referentiel::class, 'referentiel_id', 'id');
    }

    public function lesParents(): HasMany
    {
        return $this->hasMany(DetailReferentiel::class, 'parent_id', 'id');
    }

    public function lesStatuts(): HasMany
    {
        return $this->hasMany(TypeExamen::class, 'statut_exam_id', 'id');
    }

    public function lesProvinces(): HasMany
    {
        return $this->hasMany(Centre::class, 'province_id', 'id');
    }
    public function lesCommunes(): HasMany
    {
        return $this->hasMany(Centre::class, 'commune_id', 'id');
    }
    public function les_tats(): HasMany
    {
        return $this->hasMany(Centre::class, 'etat_id', 'id');
    }
    public function etats_intervenant(): HasMany
    {
        return $this->hasMany(Intervenant::class, 'etat_id', 'id');
    }

    protected $guarded = [];
}
