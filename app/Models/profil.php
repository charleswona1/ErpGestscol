<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    protected $fillable = [
        'libelle',
        'description',
        'id_etablissement',
    ];

    use HasFactory;

    protected $primaryKey = 'id_profil';
    protected $table = "profil";
    public $timestamps = false;

    public function etablissement()
    {
        return $this->belongsTo(etablissement::class);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'id_profil');
    }

    public function ressources() {
        return $this->belongsToMany(ressource::class, 'ressource_profil', 'id_profil', 'id_ressource')
                ->withPivot('lecture', 'ecriture', 'modification', 'suppression');
    }
}
