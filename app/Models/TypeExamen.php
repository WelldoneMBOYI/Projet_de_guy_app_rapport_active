<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeExamen extends Model
{
    protected $table = 'examens';

    use HasFactory;

    public function leStatut(): BelongsTo
    {
        return $this->belongsTo(DetailReferentiel::class, 'statut_exam_id', 'id');
    }

    protected $guarded = [];
}
