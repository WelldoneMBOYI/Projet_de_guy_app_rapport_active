<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Intervenant extends Model
{
    protected $table = 'intervenants';

    use HasFactory;

    public function le_tat(): BelongsTo
    {
        return $this->belongsTo(DetailReferentiel::class, 'etat_id', 'id');
    }

    protected $guarded;
}
