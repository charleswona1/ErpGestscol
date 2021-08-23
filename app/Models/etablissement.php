<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etablissement extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_etablissement';
    protected $table = 'etablissement';

    public function document()
    {
        return $this->hasOne(document::class);
    }

    public function modules()
    {
        return $this->belongsToMany(module::class, 'module_etablissement', 'id_etablissement', 'id_module');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'etablissement_user', 'id_etablissement', 'id_user');
    }

    public function annee_academique()
    {
        return $this->hasMany(annee_academique::class);
    }
}
