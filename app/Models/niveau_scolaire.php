<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cycle;

class niveau_scolaire extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'id_niveau';
    protected $table = "niveau_scolaire";
    protected $fillable = [
        'nom',
        'bareme',
        'ordre',
        'id_cycle'
    ];
    public function annee_academique() {
        return $this->belongsTo(annee_academique::class, 'id_annee_academique');
    }
    public function cycle()
    {
        return $this->belongsTo(cycle::class, 'id_cycle');
    }
}
