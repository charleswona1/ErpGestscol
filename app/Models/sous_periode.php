<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sous_periode extends Model
{
    public $timestamps = false;
    
    protected $primaryKey = 'id_sous_periode';
    protected $table = "sous_periode";
    protected $guard = 'users';
    
    protected $fillable = [
        'id_periode',
        'numero',
        'date_debut',
        'date_fin',
    ];

    public function periode() {
        return $this->belongsTo(periode::class, 'id_periode', 'id_periode');
    }
}
