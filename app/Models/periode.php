<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periode extends Model
{
    use HasFactory;

    public $timestamps = false;

    /*const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';*/

    protected $primaryKey = 'id_periode';
    protected $table = "periode";
    protected $guard = 'users';

    protected $fillable = [
        'id_annee_academique',
        'numero',
        'date_debut',
        'date_fin',
        'pourcentage',
    ];

    public function annee_academique() {
        return $this->belongsTo(annee_academique::class, 'id_annee_academique');
    }
}
