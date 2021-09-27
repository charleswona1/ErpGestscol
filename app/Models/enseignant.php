<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enseignant extends Model
{
    use HasFactory;

    public $timestamps = false;

    /*const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';*/

    protected $primaryKey = 'id_enseignant';
    protected $table = "enseignant";

    protected $fillable = [
        'id_etablissement',
        'nom',
        'titre',
        'matricule',
        'photo',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'num_autorisation',
        'num_cnps',
        'num_cni',
        'religion',
        'status',
        'diplome',
        'telephone',
        'email',
        'localisation',
        'rhesus',
        'groupe_sanguin',
        'autres',
    ];

    public function etablissement() {
        return $this->belongsTo(etablissement::class, 'id_etablissement');
    }

    public function matiereClasse() {
        return $this->hasMany(matiere_classe::class, 'id_enseignant');
    }
}
