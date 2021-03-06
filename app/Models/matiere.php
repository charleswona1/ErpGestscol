<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    use HasFactory;
    protected $table = 'matiere';
    public $timestamps = false;
    
    protected $fillable = [
        'nom',
        'abreviation',
        'id_annee_academique'
    ];
    public function annee_academique() {
        return $this->belongsTo(annee_academique::class, 'id_annee_academique');
    }
}
