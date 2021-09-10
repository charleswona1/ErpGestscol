<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annee_academique extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_annee_academique';
    protected $table = "annee_academique";
    protected $guard = 'users';
    public $timestamps = false;

    protected $fillable = [
        'id_etablissement',
        'nom',
        'date_debut',
        'date_fin',
        'est_verrouiller',
        'est_cloturer',
        'par_defaut',
    ];

    public function etablissement()
    {
        return $this->belongsTo(etablissement::class);
    }

    public function classe() {
        return $this->belongsToMany(classe::class, 'classe_annee', 'id_annee_academique', 'id_classe');
    }

    public function mention() {
        return $this->hasMany(mention::class, 'id_annee_academique');
    }

    public function bourse() {
        return $this->hasMany(bourse::class, 'id_annee_academique');
    }

    public function appreciation_note() {
        return $this->hasMany(appreciation_note::class, 'id_annee_academique');
    }

    public function motif_sanction() {
        return $this->hasMany(motif_sanction::class, 'id_annee_academique');
    }

    public function periode() {
        return $this->hasMany(periode::class, 'id_annee_academique');
    }

    public function evaluation() {
        return $this->hasMany(evaluation::class, 'id_annee_academique');
    }

    public function groupe_matiere() {
        return $this->hasMany(groupe_matiere::class, 'id_annee_academique');
    }

    public function matiere() {
        return $this->hasMany(matiere::class, 'id_annee_academique');
    }
}
