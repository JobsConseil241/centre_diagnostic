<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChampFormulaire extends Model
{
    use HasFactory;

    protected $guarded = [];


    // Définir une relation avec le modèle OptionChamp
    public function options()
    {
        return $this->hasMany(OptionChamp::class, 'id_champ');
    }
}
