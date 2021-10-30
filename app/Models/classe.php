<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'id_niveau',
        'nom'
    ];

    public function niveau()
    {
        return $this->belongsTo('App\Models\niveau_scolaire', 'id_niveau', 'id_niveau');
    }

    public function annee_academique() {
        return $this->belongsToMany(annee_academique::class, 'classe_annee', 'id_classe', 'id_annee_academique');
    }

}
