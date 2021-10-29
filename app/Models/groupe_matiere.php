<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupe_matiere extends Model
{
    use HasFactory;
    protected $table = 'groupe_matiere';

    public function annee_academique() {
        return $this->belongsTo(annee_academique::class, 'id_annee_academique');
    }
}
