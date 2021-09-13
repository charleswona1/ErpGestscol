<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ressource extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'code',
        'id_module',
    ];

    protected $primaryKey = 'id_ressource';
    protected $table = "ressource";
    public $timestamps = false;

    public function profils() {
        return $this->belongsToMany(profil::class, 'ressource_profil', 'id_ressource', 'id_profil')
                ->withPivot('lecture', 'ecriture', 'modification', 'suppression');
    }

    public function module() {
        return $this->belongsTo(module::class, 'id_module');
    }
}
