<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Centre extends Model
{
    protected $table = 'centres';

    use HasFactory;

    public function laProvince(): BelongsTo
    {
        return $this->belongsTo(DetailReferentiel::class, 'province_id', 'id');
    }
    public function laCommune(): BelongsTo
    {
        return $this->belongsTo(DetailReferentiel::class, 'commune_id', 'id');
    }
    public function le_tat(): BelongsTo
    {
        return $this->belongsTo(DetailReferentiel::class, 'etat_id', 'id');
    }

    protected $guarded = [];
}
